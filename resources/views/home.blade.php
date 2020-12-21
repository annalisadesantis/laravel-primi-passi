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
                    <h1>Scopri su Canva</h1>
                </div>
                <div class="header-right">
                    <ul>
                        <li>
                            Home
                        </li>
                        <li>
                            About
                        </li>
                        <li>
                            Template
                        </li>
                        <li>
                            Contact
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        {{-- main --}}
        <main>
            <div class="main-project">
                <h2>
                    Canva. La progettazione accessibile a tutti.
                </h2>
                <p>
                    Crea con modelli personalizzati e progetta insieme al tuo team. Condividi i progetti ovunque ti trovi e stampali in qualità professionale in qualsiasi momento.
                </p>
                <a href="{{ route("benvenuto")}}">Clicca qui per un saluto</a>
            </div>
        </main>
    </body>
</html>
