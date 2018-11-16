
<section id="comment-section">
    <hr>
    <div >
        <h2>Comments</h2>
    </div>
    @foreach($post->comments as $comment)
        <article class="comment"><strong>{{ $comment->created_at->diffForHumans() }}:</strong> {{ $comment->body }} </article>
    @endforeach

    <section id="comment-box">
        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <textarea name="body" placeholder="Your comment here." class="form-control noresize"></textarea>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>

        @include('partials.form-errors')
    </section>
</section>