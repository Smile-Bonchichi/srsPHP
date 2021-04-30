@extends('layouts.app')

@section('content')
    <p> <div class="list-group">
        <center> <h1> Меню официанта </h1> </a> </center>
    </div> </p>

    <p> <div class="list-group">   
        <center> <a href="{{ url('/addOrder') }}" class="list-group-item list-group-item-action badge badge-primary col-sm-2"> <h5> Оформить заказ </h5> </a> </center>
    </div> </p>

    <div class="list-group">   
        <center> <a href=" " class="list-group-item list-group-item-action badge badge-danger col-sm-2"> <h5> Удалить заказ </h5> </a> </center>
    </div>
    
    <p> <div class="list-group">
        <center> <a href=" " class="list-group-item list-group-item-action badge badge-warning col-sm-2"> <h5> Заказы в ожидании </h5> </a> </center>
    </div> </p>

    <div class="list-group">
        <center> <a href=" " class="list-group-item list-group-item-action badge badge-success col-sm-2"> <h5> Готовые заказы </h5> </a> </center>
    </div>

@endsection
