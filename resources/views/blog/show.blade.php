@extends('layouts.app')

@section('content')
<div class="container">
    <article class="blog-post">
        @if($post->image)
            <img src="{{ Storage::url($post->image) }}" class="img-fluid mb-4" alt="{{ $post->title }}">
        @endif
        
        <h1>{{ $post->title }}</h1>
        <div class="post-meta">
            <span>Publicado: {{ $post->created_at->format('d/m/Y') }}</span>
        </div>
        
        <div class="post-content">
            {!! $post->content !!}
        </div>
    </article>
    
    <a href="{{ route('blog.index') }}" class="btn btn-secondary mt-4">Volver al blog</a>
</div>
@endsection