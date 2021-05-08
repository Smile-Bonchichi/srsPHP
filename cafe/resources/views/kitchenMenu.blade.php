@extends('layouts.app')

@section('content')

    <div class="panel-body">

        <div class="card-body d-flex">
            <div class="flex-fill">
                <h1>
                    <center> Меню кухни</center>
                </h1>
            </div>
        </div>

        <form action="{{ url('kitchenMenu') }}" method="POST" class="form-horizontal"> {{ csrf_field() }} </form>

    
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-striped">

                        <thead>
                        <th>Номер заказа</th>
                        <th>Номер заказа</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        </thead>

                        <tbody>
                        @foreach ($orders as $order)

                            <tr>

                                <td class="table-text">
                                    <div>{{ $order->id }}</div>
                                </td>

                                <td class="table-text text-left">
                                    <div>{{ $order->table }}</div>
                                </td>

                                <td>
                                    <button type="submit" class="btn btn-outline-success">Принять заказ</button>
                                </td>

                                <td>
                                    <button type="submit" class="btn btn-outline-warning">Сообщить о готовности</button>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            
            </form>
    </div>
@endsection
