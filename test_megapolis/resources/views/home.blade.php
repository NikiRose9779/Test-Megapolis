@extends('layouts.app')

@section('title')Главная@endsection

@section('content')

  <form action=" {{ route('some_client_reservet') }} " method="post">
    @csrf
    <p>Выберите клиента для поиска броней</p>
    <select name="client" id="client">
      <option value="">---</option>
      @foreach($data as $x)
        <option value="{{ $x->id }}">{{ $x->name }}</option>
      @endforeach
    </select>
    <button type="submit">Поиск</button>
  </form>

  <hr>

  <form action="{{ route('add_reservat') }}" method="post">
    @csrf

    <p>Создание брони</p>
    <label for="client">Выберите клиента</label>
    <select name="client" id="client">
      <option value="">---</option>
      @foreach($data as $x)
        <option value="{{ $x->id }}">{{ $x->name }}</option>
      @endforeach
    </select>
    <br>
    <label for="date">Дата заезда</label>
    <input type="date" name="date" id="date">
    <br>
    <p>Статус брони</p>
    <label for="status_true">Подтверждена</label>
    <input type="radio" id="status_true" name="status" value="1">
    <label for="status_false">Не подтверждена</label>
    <input type="radio" id="status_false" name="status" value="0">
    <br>
    <button type="submit" name="button">Записать в БД</button>
  </form>
@endsection