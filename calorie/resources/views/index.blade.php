<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>カロリー管理</title>
</head>
<body>
  <h1>カロリー記録アプリ</h1>
  @foreach ($articles as $calorie)
  <a href="{{ route('article.show',['id'=>$calorie->id]) }}">
    <p>{{ $calorie->foods }}</p>
  </a>
  @endforeach
</body>
</html>