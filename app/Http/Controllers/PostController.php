<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        $postsFromDB = Post::all();
        return view('index', ['posts' => $postsFromDB]);
    }

    public function show($postId)
    {
        $singlePostFromDB = Post::findorfail($postId);
        return view('show', ['post' => $singlePostFromDB]) ;
    }

    public function  create()
    {
        $users = User::all();
        return view('create', ['users' => $users]);
    }

    public function store()
    {
        $title = request()->title; //second examble
        $description = request()->description; //second examble
        $postCreator = request()->post_creator; //second examble

        Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' =>$postCreator
        ]);
        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        $users = User::all();
        return view('edit' , ['users' => $users , 'post' => $post]);
    }

    public function update($postId)
    {

        $title = request()->title; //second examble
        $description = request()->description; //second examble
        $postCreator = request()->post_creator; //second examble

        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->update([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator
        ]);
        return to_route('posts.show', $postId);
    }

    public function destroy($postId)
    {

        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->delete();
        return to_route('posts.index');
    }

}
