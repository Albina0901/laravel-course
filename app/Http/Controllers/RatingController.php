<?php

namespace App\Http\Controllers;

use App\Models\Article;

class RatingController extends Controller
{
    public function index()
    {
        $articleCollection = Article::where('state', 'published')
            ->orderBy('likes_count', 'desc')
            ->get();

        return view('rating.index', compact('articleCollection'));
    }
}
