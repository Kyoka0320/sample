@foreach ( $followers as $follower)

<p>{{ $follower-> id }}</p>
<p>{{ $follower-> tel }}</p>
<p>{{ $follower-> created_at }}</p>


@endforeach

