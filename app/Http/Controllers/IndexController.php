<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
        $featuredArticle = Http::get(config('services.inshorts.baseUrl') . '/articles?limit=1')->json()['results'][0];
        $articles = Http::get(config('services.inshorts.baseUrl') . '/articles?offset=1&limit=3')->json()['results'];
        $blogs = Http::get(config('services.inshorts.baseUrl') . '/blogs?limit=3')->json()['results'];
        $reports = Http::get(config('services.inshorts.baseUrl') . '/reports?limit=3')->json()['results'];

        return view('index', compact('featuredArticle', 'articles', 'blogs', 'reports'));
    }

    public function about()
    {
        return view('about');
    }
}
