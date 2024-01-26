<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        $allPosts = [
            ['id' => 1 , 'title' => 'php' , 'posted_by' => 'Khaled' , 'Created_at' => '2024-1-24 08:30:00'],
            ['id' => 2 , 'title' => 'JS' , 'posted_by' => 'mohamed' , 'Created_at' => '2024-1-25 11:20:00'],
            ['id' => 3 , 'title' => 'CSS' , 'posted_by' => 'mona' , 'Created_at' => '2024-1-24 10:37:00'],
            ['id' => 4 , 'title' => 'HTML' , 'posted_by' => 'shady' , 'Created_at' => '2024-1-24 09:11:10'],
            ['id' => 5 , 'title' => 'NodeJS' , 'posted_by' => 'mariam' , 'Created_at' => '2024-1-24 05:50:30'],
        ];
        return view('index', ['posts' => $allPosts]);
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
