@props(['eyebrow' => null, 'title', 'description' => null])

<div class="section-heading mb-4">
    @if($eyebrow)<p class="eyebrow mb-2">{{ $eyebrow }}</p>@endif
    <h2 class="display-6 fw-bold mb-2">{{ $title }}</h2>
    @if($description)<p class="text-secondary mb-0">{{ $description }}</p>@endif
</div>
