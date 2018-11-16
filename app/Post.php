<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment\Comment;
use App\User;

class Post extends Model
{

    //allowed to mass updated with Moddel::Create([])
    protected $fillable = [
        'title','content', 'slug', 'summary', 'author', 'user_id'
    ];

    //inverse, fields not allowed to be mass updated
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        /*Comment::create([
            'body' => $body,
            'post_id' => $this->id
        ]);*/

        //Does same thing as above, sets id automagically
        $this->comments()->create(compact('body'));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
