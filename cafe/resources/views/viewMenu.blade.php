@extends('layouts.app')

@section('content')

    <div class="panel-body">

        <div class="card-body d-flex">
            <div class="flex-fill">
                <h1>
                    <center> Просмотр меню</center>
                </h1>
            </div>
            <h1><a href="{{ url('/managerMenu') }}" class="btn btn-outline-info pull-center" role="button">Назад</a>
            </h1>
        </div>

        <form action="{{ url('deleteFood') }}" method="POST" class="form-horizontal"> {{ csrf_field() }} </form>
        @if (count($items) > 0)
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-striped">

                        <thead>
                        <th>Название блюда</th>
                        <th>Цена</th>
                        <th>Категория</th>
                        </thead>

                        <tbody>

                        @foreach ($items as $item)
                            <tr>

                                <td class="table-text">
                                    <div>{{ $item->name }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $item->price }}</div>
                                </td>

                                <td class="table-text text-left">
                                    <div>{{ $item->category_name }}</div>
                                </td>


                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
