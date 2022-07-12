@extends('layouts.app')

@section('title')Редактирование брони@endsection

@section('content')
  <form action="{{ route('redact_resev_update', $data->id) }}" method="post">
    @csrf

    <label for="client">Выберите клиента</label>
    <select name="client" id="client" value="{{ $data->client }}">
      <option value="">---</option>
      @foreach($client as $x)
        <option value="{{ $x->id }}">{{ $x->name }}</option>
      @endforeach
    </select>
    <br>
    <label for="date">Дата заезда</label>
    <input type="date" name="date" id="date" value="{{ $data->date }}">
    <br>
    <p>Статус брони</p>

    @if( $data->status==1 )

    <label for="status_true">Подтверждена</label>
    <input type="radio" id="status_true" name="status" value="1" checked>
    <label for="status_false">Не подтверждена</label>
    <input type="radio" id="status_false" name="status" value="0">

    @else

    <label for="status_true">Подтверждена</label>
    <input type="radio" id="status_true" name="status" value="1" >
    <label for="status_false">Не подтверждена</label>
    <input type="radio" id="status_false" name="status" value="0" checked>

    @endif

    <br>
    <button type="submit" name="button">Обновить в БД</button>
  </form>
@endsection