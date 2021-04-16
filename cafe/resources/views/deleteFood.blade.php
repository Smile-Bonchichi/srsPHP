@extends('layouts.app')

@section('content')

  <div class="panel-body">

  <h1> <center> Удаление блюда </center> </h1>

  @if (count($items) > 0)
    <div class="panel panel-default">
      <div class="panel-body">
        <table class="table table-striped faculty-table">
  
          <thead>
            <th>Название блюда</th>
            <th>Категория</th>
            <th>&nbsp;</th>
          </thead>
  
          <tbody>
            @foreach ($items as $item)
            <tr>
              <td class="table-text">
                <div>{{ $item->name }}</div>
              </td>
              <td class="table-text text-left">
                <div>{{ $item->category_name }}</div>
              </td>
              <td>
                <form action="{{ url('deleteFood/'.$item->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger"> Удалить </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endif
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
      <a href="{{ url('/managerMenu') }}" class="btn btn-outline-info " role="button">Назад</a>
    </div>
  </div>

@endsection
