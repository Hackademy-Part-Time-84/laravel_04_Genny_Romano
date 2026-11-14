@extends('layout')

@section('title', $articolo['titolo'])

@section('content')
<article class="container py-5">
    <a href="{{ route('articoli.index') }}" class="back-link">← Torna agli articoli</a>
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="mt-4 mb-3"><span class="category-tag">{{ $articolo['categoria'] }}</span></div>
            <h1 class="display-4 fw-bold mb-3">{{ $articolo['titolo'] }}</h1>
            <p class="text-secondary mb-4">Di {{ $articolo['autore'] }} · {{ $articolo['data'] }}</p>
            <img src="{{ $articolo['immagine'] }}" alt="{{ $articolo['titolo'] }}" class="img-fluid rounded-4 w-100 detail-image mb-5">
            <p class="lead fw-semibold">{{ $articolo['estratto'] }}</p>
            <div class="article-content"><p>{{ $articolo['contenuto'] }}</p></div>
        </div>
    </div>
</article>
@endsection
