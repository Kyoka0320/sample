<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="{{ url('comments/store') }}" method="POST">
            {{-- POSTを使うと必ず419エラーが出る。出たら@csrfを書き込む --}}
            @csrf
            <input type="body" name="body">
            {{-- @error は違うバリデーションの処理で引っかかった時にこの処理を表示 --}}
            @error('body')
             {{$message}}
            @enderror
            <button type="submit">追加</button>
        </form>
</body>
</html>
