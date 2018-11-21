<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/19/18
 * Time: 9:28 AM
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
    <meta http-equiv="cache-control" content="max-age=0" />
    <title>Document</title>
</head>
<body>

{{--<div id="root" >
    <tabs>
        <tab name="Message" :selected="true">
            <message-element title="Message" body="Lorem Ipsum Donar..."></message-element>
        </tab>
        <tab name="Modal">
            <ins-modal v-if="showModal" message="Lorem Ipsum Donar..." @close="showModal = false"></ins-modal>
            <button @click="()=> {showModal = true}">Show Modal</button>
        </tab>
    </tabs>
</div>--}}

{{--<div id="root" class="container">--}}
     <!-- Emit and v-model -->
    {{--<coupon  :coupon-code="couponApplied" />--}}
{{--</div>--}}

{{-- <div id="root" class="container">

    <! --Named slots with default slots-- >
    <modal-card>
        <template slot="header">Modal Title</template>
        Lorem Ipsum Donar...
    </modal-card>
</div> --}}

{{--<div id="root" class="container">

    <!-- Single use components / Inline templates -->
    <progress-view inline-template>
        <div>
            <h1>Your progress Through This Course is <template>@{{ completionRate }}%</template></h1>

            <p>
                <button @click="completionRate += 10">Add</button>
            </p>
        </div>
    </progress-view>
</div>--}}


<div id="root" class="container">
    <ul v-for="skill in skills">
        <li>@{{ skill }}</li>
    </ul>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
{{--<script src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}
<script src="/js/app.js"></script>
</body>
</html>
