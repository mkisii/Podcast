@extends('layouts.app')

@section('content')
<div class="container">
    <div >
        <h3>{{$blog->title}}</h3>
    </div>
    <div>
        <p>{{$blog->description}}</p>
    </div>
    <div>
        @foreach ($blog->comments as $comment)
        
        <h6 class="text-gray-100">Comments</h6>

            <p>
                {{$comment->text}}
            </p>
            
        @endforeach
        
    </div>

    <div>
        <div>
            @if (Auth::id() === $blog->user()->first()->id)
                <a
                href="{{ route('blogs.edit', $blog->id)}}"
                class="">
                Update
                </a>
            @endif
        </div>
        <div>
            <a
            href="{{ route('comments.create', $blog->id)}}"
            class="">
            Add Comment
        </a>
        </div>
        <div>
            <span class="text-gray-500">Posted
                by:<span class="font-bold-italic text-gray-800"> {{$blog->user->name}} 
                    </span>, On , {{date('jS M Y', strtotime($blog->updated_at))}}
            </span>
        </div>
    </div>
</div>
@endsection