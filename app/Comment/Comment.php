<?php

namespace App\Comment;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    protected $fillable = ['body','post_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
