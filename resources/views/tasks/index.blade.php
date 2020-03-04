
@foreach ( $tasks as $task)

<p>{{ $task-> id }}</p>
<p>{{ $task-> tel }}</p>
<p>{{ $task-> created_at }}</p>
<a href="{{ route('tasks.edit',['task' => $task->id]) }}">編集</a>
<form action="{{ route('tasks.delete', ['task' => $task->id]) }}" method="POST">
    @method('delete')
    {{-- @scrfはセキュリティー対策のために書く --}}
    @csrf
    <button type="submit">削除</button>
</form>
@endforeach

<a href="{{ url('tasks/create') }}">新規追加</a>
