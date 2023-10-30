<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>task show</title>
</head>

<body>

    <h1>タスク詳細</h1>
    <p>【タイトル】 <br>
        {{ $task->title }}</p>

    <p>【内容】 <br>
        {!! nl2br(e($task->body)) !!}</p>

    {{-- <div class="button-group">
        <button class="action-button" onclick='location.href="{{ route('tasks.index', $task) }}"'>一覧へ戻る</button>
        <button class="action-button" onclick='location.href="{{ route('tasks.edit', $task) }}"'>編集する</button>
        <form action="{{ route('tasks.destroy', $task) }}" method="POST"  class="action-button">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="if(!confirm('削除しますか？')){return false}">削除する</button>
        </form>
    </div> --}}

    <div class="button-group">
        <button class="action-button" 
            onclick='location.href="{{ route("tasks.index", $task) }}"'>一覧へ戻る</button>
        <button class="action-button" 
            onclick='location.href="{{ route("tasks.edit", $task) }}"'>編集する</button>
        <form action="{{ route('tasks.destroy', $task) }}" method="POST"
            class="action-button" >
            @csrf
            @method('DELETE')
            <button type="submit" onclick="if(!confirm('削除しますか？')){return false}">削除する</button>
        </form>
    </div>

</body>

</html>
