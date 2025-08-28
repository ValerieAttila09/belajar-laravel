<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function index($name)
    {
        $posts = Post::all();

        return view('home', [
            'name' => $name,
            'posts' => $posts
        ]);
    }

    public function create($name)
    {
        return view('posts.create', [
            'name' => $name
        ]);
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/posts');
    }

    public function edit($name, $id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', [
            'post' => $post,
            'name' => $name
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('posts');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }
}
