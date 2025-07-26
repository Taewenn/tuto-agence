@extends('base')

@section('title', 'Tous nos biens')

@section('content')

    <div class="px-4 py-5 my-5 text-center">
        <form action="" method="get" class="d-flex gap-2 container">
            <input type="number" name="surface" placeholder="Surface minimale" class="form-control"
                value="{{ $input['surface'] ?? '' }}">
            <input type="number" name="rooms" placeholder="Nombre de pièces minimum" class="form-control"
                value="{{ $input['rooms'] ?? '' }}">
            <input type="number" name="price" placeholder="Budget max" class="form-control"
                value="{{ $input['price'] ?? '' }}">
            <input name="title" placeholder="Mot clé" class="form-control" value="{{ $input['title'] ?? '' }}">
            <button class="btn btn-primary btn-sm flex-grow-0">Rechercher</button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($properties as $property)
                <div class="col-3 mb-4">
                    @include('properties.card')
                </div>
            @empty
                <div class="col">
                    <p class="alert alert-info">Aucun bien ne correspond à votre recherche.</p>
                </div>
            @endforelse
        </div>

        <div class="my-4">
            {{ $properties->links() }}
        </div>
    </div>
@endsection
