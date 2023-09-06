@extends('components.layout')

@section('content')

    <article>
        <h1>
            {{$post->title}}
        </h1>
        <div>
            {!! $post->body !!}
{{--            to define html code in php   --}}
        </div>
    </article>
    <a href="/"> Back </a>
@endsection
