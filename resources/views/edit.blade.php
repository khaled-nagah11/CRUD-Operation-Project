@extends('Layouts.app')

@section('title')
    Edit
@endsection

@section('content')
    <form method="post" action="{{route('posts.update', $post->id)}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" value="{{$post->title}}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3">{{$post->description}}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select name="post_creator" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
@endsection
