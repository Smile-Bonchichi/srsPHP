@extends('layouts.app')

@section('content')
    <p>
    <div class="list-group">
        <center><h1> Меню менеджера </h1></center>
    </div>

    <div class="list-group">
        <center><a href="{{ url('/viewMenu') }}"
                   class="list-group-item list-group-item-action badge badge-warning col-sm-2"><h5> Посмотреть
                    меню </h5></a></center>
    </div>

    <p>
    <div class="list-group">
        <center><a href="{{ url('/addCategory') }}"
                   class="list-group-item list-group-item-action badge badge-dark col-sm-2"><h5> Добавить
                    категорию </h5></a></center>
    </div>
    <p>
    <div class="list-group">
        <center><a href="{{ url('/addFood') }}"
                   class="list-group-item list-group-item-action badge badge-primary col-sm-2"><h5> Добавить блюдо </h5>
            </a></center>
    </div>

    <p>
    <div class="list-group">
        <center><a href="{{ url('/editFood') }}"
                   class="list-group-item list-group-item-action badge badge-success col-sm-2"><h5> Изменить блюдо </h5>
            </a></center>
    </div> </p>
    <div class="list-group">
        <center><a href="{{ url('/deleteFood') }}"
                   class="list-group-item list-group-item-action badge badge-danger col-sm-2"><h5> Удалить блюдо </h5>
            </a></center>
    </div>

@endsection
