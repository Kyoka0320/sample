
@foreach ( $tasks as $task)

<p>{{ $task-> id }}</p>
<p>{{ $task-> tel }}</p>
<p>{{ $task-> created_at }}</p>
<a href="{{ route('tasks.edit',['id' => $task->id]) }}">編集</a>
@endforeach

<a href="{{ url('tasks/create') }}">新規追加</a>
