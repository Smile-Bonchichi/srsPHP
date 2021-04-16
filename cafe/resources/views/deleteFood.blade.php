@extends('layouts.app')

@section('content')

 <div class="panel-body">

    <form action="{{ url('deleteFood') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      <h1> <center> Удаление блюда </center> </h1>


      <div class="form-group">
        <label for="category_dishes" class="col-sm-2 control-label">Категория</label>
        <div class="col-sm-2">
          <select class="form-control" name="category_id">
              @foreach ($categories as $category)
                <option value="{{ $category->id}}"> {{ $category->category_name}} </option>
              @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="category_dishes" class="col-sm-2 control-label">Блюдо для удаления</label>
        <div class="col-sm-2">
          <select class="form-control">
             
          </select>
        </div>
      </div>

      <img src="C:\Users\User\Desktop\1.jpeg" class="img-fluid" alt="Тут должно быть фото">

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Удалить блюдо
          </button>
        </div>
      </div>
    </form>
  </div>
@endsection
