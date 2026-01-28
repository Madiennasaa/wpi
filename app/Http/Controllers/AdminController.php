<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard', [
            'total_berita' => Article::where('type', 'berita')->count(),
            'total_kegiatan' => Article::where('type', 'kegiatan')->count(),
        ]);
    }

    public function index() {
        $articles = Article::latest()->paginate(10);
        return view('admin.article.index', compact('articles'));
    }

    public function create() {
        return view('admin.article.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'type' => 'required|in:berita,kegiatan',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = $request->file('thumbnail') ? $request->file('thumbnail')->store('articles', 'public') : null;

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . time(),
            'type' => $request->type,
            'content' => $request->content,
            'excerpt' => Str::limit(strip_tags($request->content), 150),
            'thumbnail' => $path,
            'published_at' => now(),
        ]);

        return redirect()->route('admin.article.index')->with('success', 'Berhasil posting!');
    }

    // Tambahkan ini di dalam AdminController.php

    public function edit($id) {
        $article = Article::findOrFail($id);
        return view('admin.article.edit', compact('article'));
    }

    public function update(Request $request, $id) {
        $article = Article::findOrFail($id);
        
        $request->validate([
            'title' => 'required',
            'type' => 'required|in:berita,kegiatan',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = [
            'title' => $request->title,
            'type' => $request->type,
            'content' => $request->content,
            'excerpt' => \Illuminate\Support\Str::limit(strip_tags($request->content), 150),
        ];

        if ($request->hasFile('thumbnail')) {
            // Hapus foto lama kalau ada
            if($article->thumbnail) \Illuminate\Support\Facades\Storage::disk('public')->delete($article->thumbnail);
            
            $data['thumbnail'] = $request->file('thumbnail')->store('articles', 'public');
        }

        $article->update($data);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diupdate!');
    }

    public function destroy($id) {
        $article = Article::findOrFail($id);
        if($article->thumbnail) Storage::disk('public')->delete($article->thumbnail);
        $article->delete();
        return back()->with('success', 'Data dihapus!');
    }
}