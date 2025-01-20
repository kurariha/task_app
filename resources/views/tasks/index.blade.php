<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
        <div class="task-item">
            {{-- $taskへのリンク --}}
            <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>

            {{-- ボタン(削除する) --}}
            <form action="{{ route('tasks.destroy', $task) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="削除する" class="button" onclick="if(!confirm('削除しますか？')){return felse};">
            </form>
        </div>
    @endforeach
    <hr>
    <h1>新規タスク登録</h1>

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

    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <p>
            <label for="'title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" id="body" class="textarea">{{ old('body') }}</textarea>
        </p>
        <input type="submit" value="Create Task" class="button">
    </form>
</body>
</html>
