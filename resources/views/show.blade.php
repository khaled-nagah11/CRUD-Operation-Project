
@extends('Layouts.app')

@section('title')
    Show
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{$post->title}}</h5>
            <p class="card-text">Description: {{$post->description}}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{$post->user ?$post->user->name : 'Not Found'}}</h5>
            <p class="card-text">Email: {{$post->user ?$post->user->email : 'Not Found'}}</p>
            <p class="card-text">Created At: {{$post->user ?$post->user->created_at : 'Not Found'}}</p>
        </div>
    </div>

@endsection
