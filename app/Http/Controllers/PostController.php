<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $stringaSalutaUtente = null;

        if (Auth::check()) {
            $user = Auth::user();
            $stringaSalutaUtente = 'Ciao '.$user->name.'!';
        }

        return view('posts.index', compact('posts', 'stringaSalutaUtente'));
    }

    public function show(Post $post)
    {
        $post = Post::where('slug', $slug)->firstOrfail();
        //dd(Str::slug('gpjer'));
        return view('posts.show', compact('post'));
    }
};
