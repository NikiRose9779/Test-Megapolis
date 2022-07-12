@extends('layouts.app')

@section('title')Записи@endsection

@section('content')
<table>
  <tr><td> Клиент </td> <td>Дата брони</td> <td>Статус брони</td> </tr>
    <tr>
      @if($data->client_id=="")
      <td>Клиент не зарегестрирован в ситсеме</td>
      @else
      <td> {{ $data->client_id }} </td>
      @endif

      <td>{{ $data->date }}</td> 

      @if($data->status==1)
      <td>Подтверждена</td>
      @else
      <td>Не подтверждена</td>
      @endif

      <td><a href="{{ route('redact_resev', $data->id) }}">Отредактировать бронь</a></td>
      <td><a href="{{ route('del_resev', $data->id) }}">Удалить бронь</a></td>
    </tr>
</table>
@endsection