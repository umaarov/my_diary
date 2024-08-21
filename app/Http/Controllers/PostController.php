<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $posts = Post::when($searchTerm, function ($query, $term) {
            return $query->search($term);
        })->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $relatedPosts = $post->getRelatedPosts();

        return view('posts.show', compact('post', 'relatedPosts'));
    }
}
