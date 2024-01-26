
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
            <h5 class="card-title">{{$post['title']}}</h5>
            <p class="card-text">Description: {{$post['description']}}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: Khaled</h5>
            <p class="card-text">Email: khaledhsanin188@gmail.com</p>
            <p class="card-text">Created At: thursday 25th of January 2024 02:45:30 AM</p>
        </div>
    </div>

@endsection
