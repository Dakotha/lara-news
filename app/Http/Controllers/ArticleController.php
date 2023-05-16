<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ArticleController extends Controller
{
    public function index()
    {
        $allArticles = Http::get(config('services.inshorts.baseUrl') . '/articles?limit=9')->json();

        return view('article.index', compact('allArticles'));
    }

    public function show(string $id)
    {
        $article = Http::get(config('services.inshorts.baseUrl') . '/articles/' . $id)->json();

        return view('article.show', compact('article'));
    }
}
