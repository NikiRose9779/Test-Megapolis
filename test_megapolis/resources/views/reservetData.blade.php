@extends('layouts.app')

@section('title')Записи@endsection

@section('content')
<table>
  <tr><td> Клиент </td> <td>Дата брони</td> <td>Статус брони</td> </tr>
  @foreach($data as $x)
    <tr>
      @if($x->client_id=="")
      <td>Клиент не зарегестрирован в ситсеме</td>
      @else
        @foreach($client as $cl)
          @if($cl->id==$x->client_id)
            <td> {{ $cl->name }} </td>
          @endif
        @endforeach
      @endif

      <td>{{ $x->date }}</td> 

      @if($x->status==1)
      <td>Подтверждена</td>
      @else
      <td>Не подтверждена</td>
      @endif

      <td><a href="{{ route('redact_resev', $x->id) }}">Отредактировать бронь</a></td>
      <td><a href="{{ route('del_resev', $x->id) }}">Удалить бронь</a></td>
    </tr>
  @endforeach
</table>
@endsection