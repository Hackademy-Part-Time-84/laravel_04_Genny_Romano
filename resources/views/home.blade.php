@extends('layout')

@section('title', 'Home')

@section('content')
<section class="hero-section">
    <div class="container py-5">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-8 py-5">
                <p class="eyebrow text-white-50">UN BLOG PER LETTORI CURIOSI</p>
                <h1 class="display-2 fw-bold text-white mb-4">Ogni storia<br>apre una porta.</h1>
                <p class="lead text-white-50 mb-4">Libri, idee, viaggi e piccoli dettagli che meritano il tempo di essere scoperti.</p>
                <a href="{{ route('articoli.index') }}" class="btn btn-light btn-lg rounded-pill px-4">Esplora gli articoli</a>
            </div>
        </div>
    </div>
</section>
<section class="container py-5 my-lg-4">
    <x-section-heading eyebrow="DAL NOSTRO BLOG" title="Letture recenti" description="Una selezione di storie per cominciare." />
    <div class="row g-4">
        @foreach($articoli as $articolo)
            <div class="col-md-6 col-lg-4"><x-article-card :articolo="$articolo" /></div>
        @endforeach
    </div>
    <div class="text-center mt-5"><a href="{{ route('articoli.index') }}" class="btn btn-outline-dark rounded-pill px-4">Tutti gli articoli</a></div>
</section>
@endsection
