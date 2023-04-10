@extends('layouts.admin')
@section('title', 'Display Specific Post')
@section('content')
<div class="card">
    <div class="card-header">{{ $post->title }}</div>
    <div class="card-body">
        <p><strong>Title:</strong> {{ $post->title }}</p>
        <p><strong>Body:</strong></p>
        <div>{!! $post->body !!}</div>
        <p><strong>Published at:</strong> {{ $post->published_at->format('F j, Y, g:i a') }}</p>
        <p><strong>Slug:</strong> {{ $post->slug }}</p>
        @if ($post->image)
        <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}" style="max-width: 100%;">
        @endif
    </div>
</div>
@endsection