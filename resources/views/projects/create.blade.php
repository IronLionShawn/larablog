<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/20/18
 * Time: 2:54 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
</head>
<body>
    <div id="root" class="container">
        <form action="/projects" method="POST">
            <div class="control">
                <label for="name" class="label">Project Name:</label>
                <input type="text" id="name" class="input" name="name" v-model="name">
            </div>
            <div class="control">
                <label for="description" class="label">Project Description:</label>
                <input type="text" id="description" class="input" name="description" v-model="description">
            </div>
            <div class="control">
                <button class="button is-primary">Create</button>
            </div>
        </form>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
