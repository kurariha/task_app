<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>タスク編集</h1>

    {{-- エラーメッセージ --}}
    @if ($errors->any())
        <div class="error">
            <p>
                <b>【エラー内容】</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="'title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" id="body" class="textarea">{{ old('title', $task->body) }}</textarea>
        </p>
        <div class="button-group">
            <input type="submit" value="更新" class="button">
            {{-- ボタン(詳細へ戻る) --}}
            <button onclick='location.href="{{ route("tasks.show", $task) }}"' class="button">詳細へ戻る</button>
        </div>
    </form>
</body>
</html>
