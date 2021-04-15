@extends('layouts.app')

@section('content')

 <div class="panel-body">

    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="name_dishes" class="col-sm-3 control-label">Название блюда</label>

        <div class="col-sm-2">
           <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label for="price_dishes" class="col-sm-3 control-label">Цена</label>

        <div class="col-sm-2">
           <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label for="category_dishes" class="col-sm-2 control-label">Категория</label>
        <div class="col-sm-2">
          <select class="form-control">
             
          </select>
        </div>
      </div>

      <form>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="exampleFormControlFile1">Выберите изображение</label>
          <input type="file" class="form-control-file col-sm-2" id="exampleFormControlFile1">
        </div>
      </form>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="button" class="btn btn-primary">Добавить блюдо</button>
        </div>
      </div>
    </form>
  </div>
@endsection
