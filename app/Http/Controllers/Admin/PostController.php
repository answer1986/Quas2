<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:draft,published'
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('posts', 'public');
        }

        Post::create($validated);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post creado exitosamente');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:draft,published'
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($post->image);
            $validated['image'] = $request->file('image')->store('posts', 'public');
        }

        $post->update($validated);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post actualizado exitosamente');
    }

    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image);
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post eliminado exitosamente');
    }
}