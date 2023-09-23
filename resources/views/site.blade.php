@extends('layouts.main')

@section('title', 'Food estoque')

@section('content')

    <div id="homeContent">
        <div class="container">
            <div id="homeApresentationContent">
                <h1>Food Estoque</h1>
                <p>
                    Gerencie seu estoque de alimentos de maneira fácil e simples com o novo sistema
                    de estoque alimentício da <em>Food Estoque</em> ! 
                </p>
                <a href="/food-estoque" id="starting-home-a"><button id="btn-home">Começar</button></a>
            </div>
            <div id="homeImgBox">
                <!-- <img src="/img/imgTempHome.png" alt="" id="homeImg"> -->
            </div>
        </div>
    </div>

@endsection