<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
</head>
<body>
  @include('inc.messages')
  
  <a href="{{ route('home') }}">Добавить запись</a>
  <a href="{{ route('all_reservet') }}">Посмотреть все записи</a>

  <form action=" {{ route('some_reservet') }} " method="post">
    @csrf
    <input type="text" name="id" id="id" placeholder="Введите id необходимой записи">
    <button type="submit">Поиск</button>
  </form>

  @yield('content')
</body>
</html>
