@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($blogs as $blog)
            <div class="blogs-item">
                <div class="blogs-item-wrap">
                    <div class="blogs-item-user-icon"></div>
                    <a class="blogs-item-title" href="{{ route('blogs.show', $blog->id) }}">
                        {{ $blog->title }}
                    </a>
                </div>
                <div class="blogs-item-wrap">
                    <div class="blogs-item-votes"></div>
                    <div class="blogs-item-description">
                        {{ $blog->description }}
                    </div>
                </div>
                {{-- <div>
                    @foreach ($blog->comments as $comment)
        
                    <h5>Comments :</h5>
            
                        <p>
                            {{$comment->text}}
                        </p>
                        
                    @endforeach
                </div> --}}
                <div>
                    <span class="text-gray-500">Posted
                        by:<span class="font-bold-italic text-gray-800"> {{$blog->user->name}} 
                            </span>, On , {{date('jS M Y', strtotime($blog->updated_at))}}
                    </span>
                </div>
                <div class="blogs-item-wrap">
                    <div></div>
                    <div class="blogs-item-reactions"></div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

