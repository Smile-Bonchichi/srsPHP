@extends('layouts.app')

@section('content')

 <div class="panel-body">

    <form action="{{ url('addFood') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      <h1> <center> Добавления блюда </center> </h1>

      <div class="form-group">
        <label for="name_dishes" class="col-sm-3 control-label">Название блюда</label>

        <div class="col-sm-2">
           <input type="text" name="name_food" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label for="price_dishes" class="col-sm-3 control-label">Цена</label>

        <div class="col-sm-2">
           <input type="text" name="price" class="form-control">
        </div>
      </div>

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
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-primary">Добавить блюдо</button>
        </div>
      </div>
    </form>
  </div>
@endsection
