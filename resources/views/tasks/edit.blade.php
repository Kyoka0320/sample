<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('tasks.update',['task' => $task->id]) }}" method="POST">
        @method('put')
        {{-- これを入れないと４１９のエラーが出る --}}
        @csrf
        {{-- tel のみだと反映されないからname属性をつける --}}
        <input type="tel" name="tel" value="{{ old('tel', $task->tel) }}">
        @error('tel')
          {{ $message }}
        @enderror
        <button type="submit">追加</button>
    </form>
</body>
</html>
