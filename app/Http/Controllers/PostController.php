<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $singlePost = ['id' => 1 , 'title' => 'php' , 'description' => 'this is description' ,'posted_by' => 'Khaled' , 'Created_at' => '2024-1-24 08:30:00'];
        return view('show', ['post' => $singlePost]) ;
    }

    public function  create()
    {
        return view('create');
    }

    public function store()
    {
        $data= request()->all(); //first examble
        $title = request()->title; //second examble
        $description = request()->description; //second examble
        $postCreator = request()->post_creator; //second examble
//        dd($data , $title, $description , $postCreator);
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
