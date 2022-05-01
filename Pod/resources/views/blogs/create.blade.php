@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('blogs.store') }}" method="POST" class="create-form">
            @method('post')
            @csrf

            <div class="create-form-title mb-3">
                <input name="title" type="text" id="title" placeholder="Blog title" class="form-control" />
            </div>

            <div class="create-form-description mb-3">
                <textarea rows="8" name="description" placeholder="Enter a description" class="form-control"></textarea>
            </div>
            <div class="actions">
                <input type="submit" value="Create Post" class="btn btn-primary" />
            </div>
        </form>
    </div>
@endsection