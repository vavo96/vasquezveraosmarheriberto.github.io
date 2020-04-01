@extends('layout')

@section('tittle','Portafolio')

@section('content')
    <h1>Portafolio</h1>

    <ul>
        @forelse ($portafolio as $portafolioItem)
                <li>{{ $portafolioItem['tittle'] }}</li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse   
    </ul>
@endsection