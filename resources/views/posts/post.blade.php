<a href="/posts/{{ $post->slug }}"><div class="blog-post form-group">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString()  }} by <a href="#">Mark</a></p>
    {!! $post->content !!}
</div></a>