<?php

namespace App\Http\Controllers\Comments;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comment\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store($id)
    {
        try
        {
            $post = Post::findOrFail($id);
        }
        catch(ModelNotFoundException $e)
        {
            return back()->withErrors(['Invalid post id provided']);
        }


       /* Comment::create([
            'body' => request('body'),
            'post_id' => $post->id
        ]);*/

       $this->validate(request(),[
           'body' => 'required:min:10'
       ]);

       $post->addComment(request('body'));

        return back();
    }
}
