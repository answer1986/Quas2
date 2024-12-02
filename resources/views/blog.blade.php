@extends('layouts.arq-blog')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('blog')
<div class="blog-container">
    <div class="blog-header">
        <h2 class="blog-title">Blog</h2>
        <p class="blog-subtitle">Últimas noticias y actualizaciones</p>
    </div>
    
    <div class="blog-grid">
        @foreach($posts as $post)
        <div class="blog-card">
            <div class="blog-image">
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                @else
                    <img src="{{ asset('images/default-blog.jpg') }}" alt="Default Image">
                @endif
                <div class="blog-date">{{ $post->created_at->format('d M Y') }}</div>
            </div>
            <div class="blog-content">
                <h3 class="blog-card-title">{{ $post->title }}</h3>
                <p class="blog-excerpt">{{ Str::limit($post->excerpt, 150) }}</p>
                <a href="{{ route('blog.show', $post->slug) }}" class="read-more">Leer más</a>
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="blog-pagination">
        {{ $posts->links() }}
    </div>
</div>
@endsection


@extends('essencials.footer')