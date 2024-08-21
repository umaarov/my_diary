@extends('layouts.app')

@section('breadcrumb')
    &gt; Posts {{ " > $post->id"}}
@endsection

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <div>
            {!! nl2br(e($post->body)) !!}
        </div><br>
        <i><small>{{ $post->created_at }}</small></i>
        <p><strong>Tags</strong>: {{ implode(', ', $post->tags) }}</p>
    </article>

    <h3>Recommended Articles</h3>
    <ul>
        @forelse ($relatedPosts as $related)
            <li><a href="{{ route('posts.show', $related->id) }}">{{ $related->title }}</a></li>
        @empty
        No recommended articles available.
        @endforelse
    </ul>
@endsection
