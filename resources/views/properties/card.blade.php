<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">
                {{ $property->title }}
            </a>
        </h5>
        @if ($property->sold)
            <span class="badge bg-danger">Vendu</span>
        @else
            <span class="badge bg-success">Disponible</span>
        @endif
        <p class="card-text">
            {{ $property->surface }} m² - {{ $property->city }} ({{ $property->postal_code }})
        </p>
        <p class="text-primary fw-bold">
            {{ number_format($property->price, 0, ',', ' ') }} €
        </p>

        @if (!$property->options->isEmpty())
            <hr>

            <div class="d-flex gap-2 flex-wrap">
                @foreach ($property->options as $option)
                    <span class="badge bg-primary">{{ $option->name }}</span>
                @endforeach
            </div>
        @endif
    </div>
</div>
