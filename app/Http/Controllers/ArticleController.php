<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articleCollection = Article::paginate();

        return view('articles.index', compact('articleCollection'));
    }
}
