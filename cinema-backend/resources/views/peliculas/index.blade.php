@extends('layouts.app')

@section('content')
    <h1>Listado de Películas</h1>
    <ul>
        @foreach ($peliculas as $pelicula)
            <li>{{ $pelicula['title'] }}</li>
        @endforeach
    </ul>
@endsection