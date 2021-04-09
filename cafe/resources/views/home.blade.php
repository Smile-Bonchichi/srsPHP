@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    <center> <h1> А тут ничего нет!!! </h1> </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
