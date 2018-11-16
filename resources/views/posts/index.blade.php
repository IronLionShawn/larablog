@extends('layout')

@section ('content')
    <div id="blog" class="container">
        <div class="title">
            <h1 class="text-center">Welcome to the blog</h1>
        </div>

        <aside>
            <div id="blog-search">
                <input type="text">
                <button id="blog-search-btn">search</button>
            </div>
        </aside>
        <article>
            @foreach($posts as $post)
                @include('posts.post')
            @endforeach
        </article>

    </div>
@endsection
