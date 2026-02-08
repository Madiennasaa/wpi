<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Halaman Home
    public function index()
    {
        $berita = Article::where('type', 'berita')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->take(3)
            ->get();

        $kegiatan = Article::where('type', 'kegiatan')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('home', compact('berita', 'kegiatan'));
    }

    // Halaman khusus BERITA
    public function berita()
    {
        $articles = Article::where('type', 'berita')
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->paginate(9);

        return view('articles.index', [
            'title' => 'Berita WPI',
            'articles' => $articles,
            'type' => 'berita'
        ]);
    }

    // Halaman khusus KEGIATAN
    public function kegiatan()
    {
        $articles = Article::where('type', 'kegiatan')
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->paginate(9);

        return view('articles.index', [
            'title' => 'Kegiatan WPI',
            'articles' => $articles,
            'type' => 'kegiatan'
        ]);
    }

    // Detail artikel (untuk berita maupun kegiatan)
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
            ->whereNotNull('published_at')
            ->firstOrFail();
            
        return view('articles.show', compact('article'));
    }
}