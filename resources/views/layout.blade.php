<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tra le pagine')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark site-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold letter-spacing" href="{{ route('home') }}">TRA LE PAGINE<span class="brand-dot">.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Apri menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto gap-lg-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('articoli.index') }}">Tutti gli articoli</a></li>
            </ul>
        </div>
    </div>
</nav>
<main>@yield('content')</main>
<footer class="site-footer"><div class="container d-flex flex-column flex-md-row justify-content-between gap-2"><span>© 2026 Tra le pagine</span><span>Storie, idee e luoghi da scoprire.</span></div></footer>
</body>
</html>
