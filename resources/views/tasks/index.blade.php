<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task index</title>
</head>
<body>
    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
        <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
        @method('DELETE')
        <input type="submit" value="削除する" class="button" onclick="if(!confirm('削除しますか？')){return felse};">
        <br>
    @endforeach
    <hr>
    <h1>新規タスク登録</h1>
    <form action="{{ route('tasks.index') }}" method="post">
        @csrf
        <p>
            <label for="'title">タイトル</label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" id="body"></textarea>
        </p>
        <input type="submit" value="Create Task">
    </form>
</body>
</html>
