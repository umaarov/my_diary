@extends('layouts.app')

@section('breadcrumb')
    &gt; Posts &gt; {{ " $post->id > $post->title"}}
@endsection

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <div>
            {!! nl2br(e($post->body)) !!}
        </div>
        <small>{{ $post->created_at->toFormattedDateString() }}</small>
        <p>Tags: {{ implode(', ', $post->tags) }}</p>
    </article>

    <h3>Recommended Articles</h3>
    <ul>
        @foreach ($relatedPosts as $related)
            <li><a href="{{ route('posts.show', $related->id) }}">{{ $related->title }}</a></li>
        @endforeach
    </ul>
@endsection
