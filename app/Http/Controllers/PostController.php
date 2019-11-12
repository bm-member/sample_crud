<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
// use Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }
  
    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required|min:5',
            'content' => 'required'
        ],[
            'title.required' => 'ခေါင်းစဉ်ထည့်ရန်လိုအပ်သည်။',
            'title.min' => 'apple',
            'content.required' => 'orange'
        ]);

        $post = new Post();
        $post->title = $req->title;
        $post->content = $req->content;
        // $post->user_id = Auth::id();
        $post->user_id = auth()->id();
        $post->save();

        return redirect('post')->with('status', 'Post created');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit', compact('post'));
    }

    public function update(Request $req, $id)
    {
        $post = Post::find($id);
        $post->title = $req->title;
        $post->content = $req->content;
        $post->save();

        return redirect('post')->with('status', 'Post updated');
    }
    
    public function destroy($id)
    {
        // only one
        // $post = Post::whereId($id)->first();
        // $post = Post::where('id', $id)->first();
        $post = Post::find($id);
        // $post = Post::where('id','>' ,1)->first();

        // more than one
        // $post = Post::where('id','>' ,1)->get(); 

        $post->delete();

        return redirect('post')->with('status', 'Post deleted');

    }
}
