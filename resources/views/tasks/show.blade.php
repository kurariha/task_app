<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task show</title>
</head>
<body>
    <h1>タスク詳細</h1>
    <p>【タイトル】<br>
    {{ $task->title }}
    </p>
    <p>【本文】<br>
    {{ $task->body }}
    </p>

    <div class="botton-group">
        <button onclick='location.href="{{ route("tasks.index") }}"'>一覧へ戻る</button>
        <button onclick='location.href="{{ route("tasks.edit", $task) }}"'>編集する</button>
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </div>
</body>
</html>
