@extends('layouts.app')

@section('content')

    <div class="panel-body">

        <div class="card-body d-flex">
            <div class="flex-fill"> <h1> <center> Изменение блюда </center> </h1> </div>
            <h1> <a href="{{ url('/managerMenu') }}" class="btn btn-outline-info pull-center" role="button">Назад</a> </h1>
        </div>

        <form action="{{ url('editFoodId/'.$item->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Название блюда</label>

                <div class="col-sm-2">
                    <input type="text" name="name" id="task-name" class="form-control" value="{{ $item->name }}">
                </div>
            </div>

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Цена</label>

                <div class="col-sm-2">
                    <input type="text" name="price" id="task-name" class="form-control" value="{{ $item->price }}">
                </div>
            </div>

            <div class="form-group">
                <label for="category_dishes" class="col-sm-2 control-label">Категория</label>
                <div class="col-sm-2">
                  <select class="form-control" name="category_id" value="{{ $item->category_name }}">
                    @foreach ($categories as $category)
                      <option value="{{ $category->category_id}}"> {{ $category->category_name}} </option>
                    @endforeach
                  </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success"> Изменить </button>
                </div>
            </div>
        </form>
    </div>

@endsection