
{{-- $commentsがたくさんのコメントが入っている。
$commentは一つ一つのコメントが入っている。 --}}
{{-- created_atは投稿した時間 --}}
{{-- {{}}はbladeで必ず使う --}}
@foreach ( $comments as $comment )
<p>{{ $comment->id }}</p>
<p>{{ $comment->body }}</p>
<p>{{ $comment->created_at }}</p>

@endforeach
<a href="{{url('comment/create')}}">新規追加</a>
