<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/14/18
 * Time: 1:51 PM
 */
?>

@extends('layout')

@section('content')
<div id="blog" class="container">
    <div class="title">
        <h1 >{!! $post->title !!}</h1>
    </div>
    <section class="divider">
        <aside>
            <div id="blog-search">
                <input type="text">
                <button id="blog-search-btn">search</button>
            </div>
        </aside>
        <section class="blog-main">
            <article>
                {!! $post->content !!}
            </article>
            @include('partials.comment-section')
        </section>

    </section>
</div>
@endsection
