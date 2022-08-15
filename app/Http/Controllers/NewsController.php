<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getNews();
        return view('news/index', [
            'newsList' => $news,
        ]);
    }

    public function show(int $id)
    {
        $news = $this->getNews($id);
        return view('news/show', [
            'news' => $news
        ]);
    }

    public function showCategory()
    {
        $categories = $this->getCategories();
        return view('news/show-category', [
            'categories' => $categories
        ]);
    }

    public function newsByCategory(string $category)
    {
        $news = $this->getNews(null, $category);
        return view('news/news-by-category', [
            'newsListByCategory' => $news
        ]);
    }
}
