@extends('layout')

@section('title', 'Tutti gli articoli')

@section('content')
<section class="page-intro">
    <div class="container py-5">
        <p class="eyebrow">IL NOSTRO ARCHIVIO</p>
        <h1 class="display-3 fw-bold">Tutti gli articoli</h1>
        <p class="lead text-secondary mb-0">Un posto dove tornare a curiosare, leggere e trovare nuove ispirazioni.</p>
    </div>
</section>
<section class="container pb-5">
    <div class="row g-4">
        @foreach($articoli as $articolo)
            <div class="col-md-6 col-lg-4"><x-article-card :articolo="$articolo" /></div>
        @endforeach
    </div>
</section>
@endsection
