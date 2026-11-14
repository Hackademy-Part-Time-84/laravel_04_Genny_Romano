@props(['articolo'])

<article class="card article-card h-100 border-0">
    <a href="{{ route('articoli.show', $articolo['slug']) }}" class="article-image-link">
        <img src="{{ $articolo['immagine'] }}" class="card-img-top article-image" alt="{{ $articolo['titolo'] }}">
    </a>
    <div class="card-body p-4 d-flex flex-column">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="category-tag">{{ $articolo['categoria'] }}</span>
            <small class="text-secondary">{{ $articolo['data'] }}</small>
        </div>
        <h3 class="h5 fw-bold"><a class="article-title-link" href="{{ route('articoli.show', $articolo['slug']) }}">{{ $articolo['titolo'] }}</a></h3>
        <p class="text-secondary">{{ $articolo['estratto'] }}</p>
        <div class="mt-auto pt-2"><a href="{{ route('articoli.show', $articolo['slug']) }}" class="read-link">Leggi l'articolo <span aria-hidden="true">→</span></a></div>
    </div>
</article>
