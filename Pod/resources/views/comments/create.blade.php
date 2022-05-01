@extends('layouts.app')

@section('content')
    <div class="container">

        @if (Auth::id() === $blog->user()->first()->id)
        <h6>Create Comment</h6>
        <div>
            <h3> Question Title: {{$blog->title}}</h3>
        </div>

        <div><p>Question detail: {{$blog->description}}</p></div>
        
           
            <form action="{{ route('comments.store', $blog->id) }}" method="POST" class="create-form">
                @method('post')
                @csrf


                {{-- <div class="create-form-title mb-3">
                    <input name="title" type="text" id="title" placeholder="Blog title" class="form-control" />
                </div> --}}

                <div class="create-form-description mb-3">
                    <textarea rows="8" name="text" placeholder="Enter a Comment" class="form-control"></textarea>
                </div>
                <div class="actions">
                    <input type="submit" value="Create Comment" class="btn btn-primary" />
                </div>
            </form>
        @else
        <h3>You must be login to Access the Form</h3>

        @endif
    </div>
@endsection