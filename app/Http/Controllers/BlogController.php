<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function index()
    {
        $allArticles = Http::get(config('services.inshorts.baseUrl') . '/blogs?limit=9')->json();

        return view('article.index', compact('allArticles'));
    }

    public function show(string $id)
    {
        $article = Http::get(config('services.inshorts.baseUrl') . '/blogs/' . $id)->json();

        return view('article.show', compact('article'));
    }
}
