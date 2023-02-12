<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <p>{{$txt}}</p>
  @if(count($errors) > 0)
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  @endif
  <form action="/" method="POST">
    @csrf
    <input type="text" name='content'>
    <input type="submit">
  </form>
</body>

</html>