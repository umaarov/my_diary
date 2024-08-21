@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.index') }}" method="GET"> <br>
        <input type="text" name="search" placeholder="Search posts..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    @foreach ($posts as $post)
        <div>
            <h2><a href="{{ route('posts.show', $post->id) }}">{{"$post->id. $post->title"}}</a></h2>
            <p>{{ \Illuminate\Support\Str::limit($post->body, 150) }}</p>
            <small>{{ $post->created_at->diffForHumans() }}</small>
        </div><br>
    @endforeach

    {{ $posts->links() }}
@endsection
