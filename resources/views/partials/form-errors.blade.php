<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/15/18
 * Time: 1:48 PM
 */
?>
<div class="form-group">
    <div class="danger alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
    </div>
</div>
