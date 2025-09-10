<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Comment;
use App\Models\TopicImage;
use App\Models\TopicLike;
use App\Models\TopicReport;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
   public function index(Request $request)
    {
        $adoptionCatId = env('CATEGORY_SAHIPLENDIRME_ID', 1);

        $q = trim($request->get('q', ''));
        $categoryFilter = $request->get('category', 'all');

        // Sahiplendirme sayacı (ayrı bölüm için)
        $count = Topic::where('category_id', $adoptionCatId)
                    ->where('deleted', 0)
                    ->count();

        // Ana liste (sahiplendirme hariç)
        $topics = Topic::with(['user','category'])
            ->where('deleted', 0)
            ->where('category_id', '!=', $adoptionCatId)
            ->when($q, fn($query) => $query->where('title', 'like', "%{$q}%"))
            ->when($categoryFilter !== 'all' && !empty($categoryFilter),
                fn($query) => $query->where('category_id', $categoryFilter)
            )
            ->orderByDesc('id')
            ->paginate(5)
            ->onEachSide(2)
            ->withQueryString(); // <— filtreler sayfalarda korunur

        // Filtre dropdown için kategoriler (sahiplendirme hariç)
        $categories = Category::where('id', '!=', $adoptionCatId)
                            ->orderBy('name')
                            ->get();

        // Sahiplendirme kutucuğu (üstte gösteriyorsun)
        $sahiplendirmeTopics = Topic::with(['user','images'])
            ->where('category_id', $adoptionCatId)
            ->where('deleted', 0)
            ->orderByDesc('id')
            ->take(3)
            ->get();

        return view('index', compact(
            'count', 'topics', 'sahiplendirmeTopics', 'categories', 'categoryFilter', 'q'
        ));
    }

    public function storeTopic(Request $request)
    {
        
        $request->validate([
            'category' => 'required',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        $topic = new Topic;

        $topic->category_id = $request->input('category');
        $topic->user_id = Auth::id(); 
        $topic->title = $request->input('title');
        $topic->content = $request->input('content');
        $topic->deleted = 0; 

        $topic->save();

        if($request->hasFile('images')){
        foreach($request->file('images') as $image){
            $path = $image->store('topics', 'public'); // storage/app/public/topics içine kaydeder
            
            TopicImage::create([
                'topic_id'   => $topic->id,
                'image_path' => $path,
                'deleted'    => 0
            ]);
        }
    }

        return redirect()->route('topic.create', $topic->id)
                         ->with('success', 'Sorunuz başarıyla eklendi!');
    }

    public function showTopic()
    {
        $categorys = Category::where('deleted', 0)
                ->get();

        return view('sor', compact('categorys'));
    }

   public function showTopicDetail($id)
    {
        // Ana topic
        $topic = Topic::with(['user', 'images', 'comments.user'])
                    ->where('deleted', 0)
                    ->where('id', $id)
                    ->firstOrFail(); 

        // Benzer konular
        $similarTopics = Topic::where('deleted', 0)
                            ->where('id', '!=', $id)        // bu topic hariç
                            ->where('category_id', '!=', 1) // category_id 1 olmasın
                            ->inRandomOrder()               // random sırala
                            ->take(5)                       // 5 adet al
                            ->get();

        return view('soru-detay', compact('topic', 'similarTopics'));
    }



    public function storeComment(Request $request, $id)
    {
        $topic = Topic::where('deleted', 0)->findOrFail($id);

        $validated = $request->validate([
            'content' => 'required|string|max:2000',
            'images.*' => 'nullable|image|max:4096',
        ]);

        $comment = Comment::create([
            'topic_id' => $topic->id,
            'user_id'  => Auth::id(),
            'content'  => $validated['content'],
            'deleted'  => 0,
        ]);

        if ($request->hasFile('images')) {
            // İlk dosyayı al ve sakla
            $first = $request->file('images')[0];
            $path = $first->store('answers', 'public');
            $comment->image_path = $path;
            $comment->save();
        }

        return back()->with('success', 'Cevabın başarıyla eklendi!');
    }

    public function toggle($id)
    {
        $topic = Topic::where('deleted',0)->findOrFail($id);
        $userId = Auth::id();

        $existing = TopicLike::where('topic_id',$topic->id)
                             ->where('user_id',$userId)
                             ->first();

        if ($existing) {
            $existing->delete();
            $liked = false;
        } else {
            TopicLike::create(['topic_id'=>$topic->id,'user_id'=>$userId]);
            $liked = true;
        }

        $count = $topic->likes()->count();

        return response()->json([
            'liked' => $liked,
            'likes_count' => $count,
            'message' => $liked ? 'Beğenildi' : 'Beğeni kaldırıldı',
        ]);
    }

    public function storeReport(Request $request, $id)
    {
        $request->validate([
            'reason' => 'nullable|string|max:100',
            'description' => 'nullable|string|max:2000',
        ]);

        $topic = Topic::where('deleted',0)->findOrFail($id);

        TopicReport::create([
            'topic_id' => $topic->id,
            'user_id'  => Auth::id(), 
            'reason'   => $request->reason,
            'description' => $request->description,
            'status'   => 'open',
        ]);

        return response()->json([
            'ok' => true,
            'message' => 'Şikayetiniz alındı. Teşekkürler.',
        ]);
    }

        public function me()
    {
        $user = Auth::user()->loadMissing('rank'); 
        
        return view('profile', compact('user'));
    }

    public function myTopic()
    {
        $query = Topic::query()
            ->where('user_id', Auth::id())
             ->where('deleted', 0)
            ->with(['category']) // kategoriyi de lazımsa
            ->withCount([
                // 'comments' ilişkinde zaten where('deleted',0) var ama garanti için tekrar yazdım
                'comments as replies_count' => fn($q) => $q->where('deleted', 0),
                'likes as pati_count',
            ])
            ->latest();

        if ($q = trim(request('q', ''))) {
            $query->where('title', 'like', "%{$q}%");
        }

        $topics = $query->paginate(5)->withQueryString();

        return view('profileTopic', compact('topics'));
    }


    public function softDelete(\App\Models\Topic $topic)
        {
            if ($topic->user_id !== \Illuminate\Support\Facades\Auth::id()) {
                abort(403);
            }

            $topic->update(['deleted' => 1]);

            return back()->with('success', 'Konu başarıyla silindi.');
        }

        
            public function adaption(Request $request)
    {
        $adoptionCatId = env('CATEGORY_SAHIPLENDIRME_ID', 1);

        $q     = trim($request->get('q', ''));
        $order = $request->get('order', 'new'); // new, old, replies, likes

        // Üstte göstereceğin toplam ilan sayısı (opsiyonel)
        $count = Topic::where('category_id', $adoptionCatId)
                    ->where('deleted', 0)
                    ->count();

        // SADECE sahiplendirme kategorisi
        $topics = Topic::with(['user','images'])
            ->withCount([
                'comments as replies_count' => fn($q2) => $q2->where('deleted', 0),
                'likes as pati_count',
            ])
            ->where('deleted', 0)
            ->where('category_id', $adoptionCatId)
            ->when($q !== '', fn($query) =>
                $query->where('title', 'like', "%{$q}%")
            );

        // Sıralama
        $order = in_array($order, ['new','old','replies','likes'], true) ? $order : 'new';
        switch ($order) {
            case 'old':
                $topics->orderBy('created_at', 'asc');
                break;
            case 'replies':
                $topics->orderByDesc('replies_count')->orderByDesc('id');
                break;
            case 'likes':
                $topics->orderByDesc('pati_count')->orderByDesc('id');
                break;
            default: // 'new'
                $topics->orderByDesc('created_at');
                break;
        }

        $topics = $topics->paginate(12)->onEachSide(1)->withQueryString();


        return view('adoption', compact('count','topics','q','order'));
    }




}
