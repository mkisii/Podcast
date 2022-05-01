@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="text-center ">
            <h1 class="text-5xl uppercase">
                My Posts
            </h1>
        </div>

        
        <div class="pt-10">
            {{-- @if (Auth::id() === $blog->user()->first()->id) --}}
                <a
                    href="{{ route('blogs.create') }}"
                    class="">
                    Add A Post
                </a>
            {{-- @endif --}}
        </div>
       

        <div class=" w-5/6 py-10">
            @foreach ($blogs as $blog)
                <div class="m-auto">
                    <a class="blogs-item-title" href="{{ route('blogs.show', $blog->id) }}">
                        <h3>{{ $blog->title }}</h3>
                    </a>

                    <p class="text-lg text-gray-700 py-6"> 
                        {{ $blog->description}}
                    </p>
                    <hr class="mt-4 mb-8" >
                    {{-- @foreach ($blog->comments as $comment)
        
                    <h6 class="text-gray-100">Comments</h6>
            
                        <p>
                            {{$comment->text}}
                        </p>
                        
                    @endforeach --}}
                </div>
            @endforeach
        </div>         

    </div>

@endsection