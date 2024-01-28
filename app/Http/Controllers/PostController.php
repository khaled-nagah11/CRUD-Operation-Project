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
        $data= request()->all(); //first examble
        $title = request()->title; //second examble
        $description = request()->description; //second examble
        $postCreator = request()->post_creator; //second examble
//        dd($data , $title, $description , $postCreator);

        Post::create([
            'title' => $title,
            'description' => $description
        ]);
        return to_route('posts.index');
    }

    public function edit()
    {
        return view('edit');
    }

    public function update()
    {
        $title = request()->title; //second examble
        $description = request()->description; //second examble
        $postCreator = request()->post_creator; //second examble
//        dd($title, $description , $postCreator);

        return to_route('posts.show', 1);
    }

    public function destroy()
    {
        return to_route('posts.index');
    }

}
