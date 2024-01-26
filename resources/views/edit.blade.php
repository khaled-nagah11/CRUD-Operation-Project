@extends('Layouts.app')

@section('title')
    Edit
@endsection

@section('content')
    <form method="post" action="{{route('posts.update',2)}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select name="post_creator" class="form-control">
                <option value="1">Khaled</option>
                <option value="2">Mohamed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
