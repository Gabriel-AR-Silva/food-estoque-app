<!-- @extends('layouts.main')

@section('title', 'Cestas')

@section('content')

<br> <br> <br>

    <ul>
        @foreach( $cestas as $cesta)
        <li> 
            <p>
                <strong>Cesta:</strong> {{ $cesta->titulo }} 
            </p> 
            <p>
                <strong>Descrição:</strong> {{ $cesta->descricao }}
            </p>
            <p>
                <strong>Pronta:</strong> 
                <span> {{ $cesta->pronta ? 'Sim' : 'Não' }} </span>
            </p>
        </li>
        <br>
        @endforeach
    </ul>

    <a href="/">Voltar a Home</a>

@endsection -->