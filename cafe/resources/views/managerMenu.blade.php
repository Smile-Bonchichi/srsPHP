@extends('layouts.app')

@section('content')

	<div class="list-group">
		<center> <a href="{{ url('/addFood') }}" class="list-group-item list-group-item-action badge badge-primary col-sm-2"> <h5> Добавить блюдо </h5> </a> </center>
    </div>

    <p> <div class="list-group">
		<center> <a href="{{ url('/editFood') }}" class="list-group-item list-group-item-action badge badge-success col-sm-2"> <h5> Изменить цену </h5> </a> </center>
    </div> </p>
    <div class="list-group">
		<center> <a href="{{ url('/deleteFood') }}" class="list-group-item list-group-item-action badge badge-danger col-sm-2"> <h5> Удалить блюдо </h5> </a> </center>
    </div>

@endsection
