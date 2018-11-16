<?php

namespace App\Http\Controllers\Posts;

use App\Comment\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

use DateTime;
use DateTimeZone;
class PostsController extends Controller
{
    private $title = "Posts";

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index',compact('posts'))->with('title',$this->title);
    }

    public function show($slug)
    {

        $post = Post::where('slug', $slug)->first();


        if (!$post) {
            abort(404);
        }
        $this->title = $post->title;
        return view('posts.show',compact('post'))->with("title",$this->title);
    }

    public function create()
    {
        $this->title = "Create a Post";
        return view('posts.create')->with('title',$this->title);
    }

    public function store(  )
    {
        //$post = new Post();

        //redirects to same page if errors
        $this->validate(request(), [
            'title' => 'required|unique:posts|max:40',
            'content' => 'required'
        ]);

        //$post->title = request('title');
        //$post->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', request('title'))));
        //$post->content = request('content');




        $dateTime = new DateTime();
        $timeZone = new DateTimeZone('America/New_York');
        $dateTime->setTimeZone($timeZone);

        //$post->date_posted = $dateTime->format('Y-m-d');
            //dd(auth()->id());
        //$post->save();
        $post = Post::create([
            'title' => request('title'),
            'content' => request('content'),
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', request('title')))),
            'user_id' => auth()->id()
        ]);



        return redirect('/posts/' . $post->slug);
    }

}
