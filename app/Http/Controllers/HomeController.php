<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $berita = Article::where('type', 'berita')
            ->latest('id')
            ->take(3)
            ->get();

        $kegiatan = Article::where('type', 'kegiatan')
            ->latest('id')
            ->take(3)
            ->get();

        return view('home', compact('berita', 'kegiatan'));
    }

    public function blog(Request $request)
    {
        $query = Article::whereNotNull('published_at');

        // Filter otomatis jika ada parameter ?filter=berita atau ?filter=kegiatan
        if ($request->has('filter') && in_array($request->filter, ['berita', 'kegiatan'])) {
            $query->where('type', $request->filter);
        }

        $articles = $query->orderByDesc('published_at')->paginate(9);

        // Menentukan title dinamis berdasarkan filter
        $title = 'Artikel & Kegiatan';
        if($request->filter == 'berita') $title = 'Berita WPI';
        if($request->filter == 'kegiatan') $title = 'Kegiatan WPI';

        return view('articles.index', [
            'title' => $title,
            'articles' => $articles
        ]);
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('articles.show', compact('article'));
    }
}