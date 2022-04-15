<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $categoryCollection = ArticleCategory::where('state', 'published')->paginate(1);

        return view('article_category.index', compact('categoryCollection'));
    }

    public function show($id)
    {
        $category = ArticleCategory::findOrFail($id);

        return view('article_category.show', compact('category'));
    }
}
