
@foreach ( $tasks as $task)

<p>{{ $task-> id }}</p>
<p>{{ $task-> tel }}</p>
<p>{{ $task-> created_at }}</p>

@endforeach

<a href="{{ url('tasks/create') }}">新規追加</a>