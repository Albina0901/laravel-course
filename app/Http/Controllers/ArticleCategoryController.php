<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategoryCollection = ArticleCategory::where('state', 'published')->paginate(1);

        return view('article_category.index', compact('articleCategoryCollection'));
    }
}
