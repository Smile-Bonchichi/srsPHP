@extends('layouts.app')

@section('content')

  <div class="panel-body">

    <div class="card-body d-flex">
      <div class="flex-fill"> <h1> <center> Меню кухни </center> </h1> </div>
    </div>

    <form action="{{ url('kitchenMenu') }}" method="POST" class="form-horizontal"> {{ csrf_field() }} </form>

      @if (count($items) > 0)
      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table table-striped">
  
          <thead>
            <th>Название блюда</th>
            <th>Категория</th>
            <th>&nbsp;</th>
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
                <button type="submit" class="btn btn-outline-success">Принять заказ</button>
              </td>
            
              <td>
                <button type="submit" class="btn btn-outline-warning">Сообщить о готовности</button>
              </td>

            </tr>
            @endforeach
          
          </tbody>
          </table>
        </div>
      </div>
      @endif
    </form>
  </div>
@endsection
