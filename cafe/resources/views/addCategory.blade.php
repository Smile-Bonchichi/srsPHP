@extends('layouts.app')

@section('content')

  <div class="panel-body">

    <div class="card-body d-flex">
      <div class="flex-fill"> <h1> <center> Добавление категории </center> </h1> </div>
      <h1> <a href="{{ url('/managerMenu') }}" class="btn btn-outline-info pull-center" role="button">Назад</a> </h1>
    </div>

    <form action="{{ url('addCategory') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="name_category" class="col-sm-3 control-label">Название категории</label>

        <div class="col-sm-2">
          <input name="name_category" type="text" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <p> <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-outline-dark">Добавить категорию</button>
        </div> </p>
      </div>
    </form>
  </div>
@endsection
