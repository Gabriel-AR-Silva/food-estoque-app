<!-- @extends('layouts.main')

@section('title', 'Meu estoque')

@section('content')

<br> <br> <br>

    <ul>
        @foreach( $meu_estoque as $item)
        <li> 
            <img src="{{ $item->foto }} " alt="{{ $item->titulo }}" width="30" height="30"> 
            <strong>Item:</strong> {{ $item->titulo }} 
            <strong>Validade:</strong> {{ $item->validade }}
        </li>
        @endforeach
    </ul>
    <a href="/">Voltar a Home</a>

@endsection -->