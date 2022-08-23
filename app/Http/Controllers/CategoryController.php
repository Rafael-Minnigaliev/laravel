<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(string $category)
    {
        $news = $this->getNews(null, $category);
        return view('categories/show', [
            'newsListByCategory' => $news
        ]);
    }

    public function index()
    {
        $categories = $this->getCategories();
        return view('categories/index', [
            'categories' => $categories
        ]);
    }
}
