@extends('layouts.main')

@section('title', 'Validade')

@section('content')

<br> <br> <br>
<ul>
        @foreach( $meu_estoque_val as $item_val)
        <li> 
            <strong>Item:</strong> {{ $item_val->titulo }} 
            <strong>Categoria:</strong> {{ $item_val->categoria }} 
            <strong>Validade:</strong> {{ $item_val->validade }}
        </li>
        @endforeach
    </ul>
    <a href="/">Voltar a Home</a>

@endsection