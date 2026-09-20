<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class PublicController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => [
                'required',
                File::image()->max('2mb'),
            ],
        ]);

        $validated['image'] = $request->file('image')->store('posts', 'public');

        Post::create($validated);

        return redirect()
            ->route('posts.index')
            ->with('success', 'Articolo creato con successo.');
    }
}