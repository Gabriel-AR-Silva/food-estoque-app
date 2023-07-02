<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <header>
            <div class="container">
                <nav>
                    <div id="logo">
                        <a href="/">
                            <img src="/img/logoTemp.png" alt="logo do site" id="logo">
                        </a>
                    </div>
                    <ul class="navbar-items">
                        <li><a href="/food-estoque">Tudo</a></li>
                        <li><a href="/meu-estoque">Meu estoque</a></li>
                        <li><a href="/reestoque">Reestoque</a></li>
                        <li><a href="/cestas">Cestas</a></li>
                        <li><a href="/validade">Validade</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        @yield('content')
        <script src="/js/scripts.js"></script>
    </body>
</html>