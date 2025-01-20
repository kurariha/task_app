<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>タスク詳細</h1>
    <p>【タイトル】<br>
    {{ $task->title }}
    </p>
    <p>【本文】<br>
    {{ $task->body }}
    </p>

    {{-- ボタン(一覧へ戻る、編集する、削除する) --}}
    <div class="button-group">  
        <button onclick='location.href="{{ route("tasks.index") }}"' class="button">一覧へ戻る</button>
        <button onclick='location.href="{{ route("tasks.edit", $task) }}"' class="button">編集する</button>
        <form action="{{ route('tasks.destroy', $task) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};" class="button">
        </form>
    </div>
</body>
</html>
