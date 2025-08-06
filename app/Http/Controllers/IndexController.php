<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class IndexController extends Controller
{
   public function index()
    {
        $categoryId = env('CATEGORY_SAHIPLENDIRME_ID', 1);

        $allTopics = Topic::with('user')
                      ->where('deleted', 0)
                      ->get();

        $catSahiplendirmeTopics = $allTopics->where('category_id', $categoryId)->sortByDesc('id');

        $count = $catSahiplendirmeTopics->count();

        $topics = $allTopics; 
        $sahiplendirmeTopics = $catSahiplendirmeTopics;
       
        return view('index', compact('count', 'topics', 'sahiplendirmeTopics'));
    }
}
