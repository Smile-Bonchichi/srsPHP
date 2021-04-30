@extends('layouts.app')

@section('content')

  <div class="panel-body">

    <div class="card-body d-flex">
      <div class="flex-fill"> <h1> <center> Оформление заказа </center> </h1> </div>
      <h1> <a href="{{ url('/waiterMenu') }}" class="btn btn-outline-info pull-center" role="button">Назад</a> </h1>
    </div>
  
    <form action="{{ url('addOrder') }}" method="POST" class="form-horizontal"> {{ csrf_field() }} </form>
      @if (count($items) > 0)
        <div class="panel panel-default">
          <div class="panel-body">
            <table class="table table-striped">
    
              <thead>
                <th>Название блюда</th>
                <th>Цена</th>
                <th>Категория</th>
                <th>&nbsp;</th>
              </thead>
      
              <tbody>
                
                @foreach ($items as $item)
                <tr>
                  
                  <td class="table-text">
                    <div>{{ $item->name }}</div>
                  </td>
                  
                  <td class="table-text">
                    <div>{{ $item->price }}</div>
                  </td>

                  <td class="table-text text-left">
                    <div>{{ $item->category_name }}</div>
                  </td>
                  
                  <td class="table-text text-left">
                    <a href=" " class="btn btn-outline-primary"> Выбрать </a>
                  </td>
                
                </tr>
                @endforeach
              
              </tbody>
            </table>
            
            <div class="col-md-6 float-right">
              <a href=" " class="btn btn-primary float-right" role="button"> Оформить заказ </a>
            </div>
          
          </div>
        </div>
      @endif
    </div>
@endsection
