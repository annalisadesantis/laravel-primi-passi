<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Laravel primi passi</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset("css/app.css")}}">
        {{-- GOOGLE FONT --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    </head>
    <body>
        {{-- header --}}
        <header>
            <div class="container">
                <div class="header-left">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3b/Canva_Logo.png" alt="">
                    <h1>
                        {{ $title_header }}
                    </h1>
                </div>
                <div class="header-right">
                    <ul>
                        @foreach ($menu as $voci)
                            <li>
                                {{ $voci }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </header>
        {{-- main --}}
        <main>
            <div class="main-project">
                <h2>
                    {{ $title_main }}
                </h2>
                <p>
                    {{ $paragrafo }}
                </p>
                <a href="{{ route("benvenuto")}}">
                    {{ $link_home }}
                </a>
            </div>
        </main>
    </body>
</html>
