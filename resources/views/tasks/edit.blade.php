<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task edit</title>
</head>
<body>
    <h1>タスク編集</h1>
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
        <input type="submit" value="更新">
    </form>
    <button onclick='location.href="{{ route("tasks.show", $task) }}"' class="button-group">詳細へ戻る</button>
</body>
</html>
