@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>Bienvenido al CRUD de LARAVEL</h1>
        <br>
        <a href="{{ route('client.index') }}" class="btn btn-primary">Listado de Clientes</a>
    </div>
@endsection