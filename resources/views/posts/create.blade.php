<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/14/18
 * Time: 2:55 PM
 */
?>

@extends('layout')

@section('content')
    <div id="blog" class="container">
        <div>
            <h1>Create a Blog Post</h1>
        </div>

        <form method="POST" action="/posts">
            {{csrf_field()}}
            <div class="form-group">
                <label for="inputTitle">Title</label>
                <input type="text" name="title" class="form-control" id="inputTitle" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control noresize" name="content" required></textarea>
            </div>

            <div class="form-group"><button type="submit" class="btn btn-primary">Publish</button></div>
        </form>

        @include('partials.form-errors')

        <form action="/posts" method="post">
            <div class="form-group"><label for="inputTitle"></label><textarea name="content" id="" cols="30" rows="10"
                                                                               class="form-control noresize"
                                                                               required></textarea></div>
            <div class="form-group"><label for="content"></label><textarea name="content" id="" cols="30" rows="10"
                                                                            class="form-control noresize"
                                                                            required></textarea></div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" value="">Publish</button>
            </div>
        </form>

    </div>
@endsection

