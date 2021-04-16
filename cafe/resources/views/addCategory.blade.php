@extends('layouts.app')

@section('content')

 <div class="panel-body">

    <form action="{{ url('addCategory') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      <h1> <center> Добавление категории </center> </h1>

      <div class="form-group">
        <label for="name_category" class="col-sm-3 control-label">Название категории</label>

        <div class="col-sm-2">
           <input name="name_category" type="text" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <p> <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-outline-dark">Добавить категорию</button>
          <a href="{{ url('/managerMenu') }}" class="btn btn-outline-info" role="button">Назад</a>
        </div> </p>
      </div>
    </form>
  </div>
@endsection
