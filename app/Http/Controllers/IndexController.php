<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\TopicImage;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
   public function index()
    {
        $categoryId = env('CATEGORY_SAHIPLENDIRME_ID', 1);

        $count = Topic::where('category_id', $categoryId)
                    ->where('deleted', 0)
                    ->count();

       $topics = Topic::with('user')
                ->where('deleted', 0)
                ->where('category_id', '!=', env('CATEGORY_SAHIPLENDIRME_ID', 1))
                ->orderByDesc('id')
                ->paginate(5)      
                ->onEachSide(2);   
                                    
        $sahiplendirmeTopics = Topic::with(['user', 'images'])
                        ->where('category_id', $categoryId)
                        ->where('deleted', 0)
                        ->orderByDesc('id')
                        ->take(3)
                        ->get();

                        
        return view('index', compact('count', 'topics', 'sahiplendirmeTopics'));
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
    $topic = Topic::where('deleted', 0)
                  ->where('id', $id)
                  ->firstOrFail(); 

    return view('soru-detay', compact('topic'));
}
}
