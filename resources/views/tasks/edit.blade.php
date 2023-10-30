<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEdit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>投稿論文編集</h1>
    <form action="{{ route('tasks.update', $task) }}" method="post" class="edit">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">論文タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
        </p>
        <p>
            <label for="body">内容</label><br>
            <textarea name="body" class="body" id="body">{{ old('body', $task->body) }}</textarea>
        </p>

    <input type="submit" value="更新">
    <button type="button" onclick='location.href="{{  route('tasks.show', $task)}}"'>詳細へ戻る</button>
    </form>
    
</div>
</body>

</html>
