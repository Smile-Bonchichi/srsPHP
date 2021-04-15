@extends('layouts.app')

@section('content')

	<div class="list-group">
		<a href="{{ url('/addFood') }}" class="list-group-item list-group-item-action text-center active col-sm-2">Добавить блюдо</a>
    </div>

    <p> <div class="list-group">
		<a href="{{ url('/editFood') }}" class="list-group-item list-group-item-action text-center active col-sm-2">Изменить цену</a>
    </div> </p>
    <div class="list-group">
		<a href="{{ url('/deleteFood') }}" class="list-group-item list-group-item-action text-center active col-sm-2">Удалить блюдо</a>
    </div>

@endsection
