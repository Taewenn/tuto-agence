@extends('base')

@section('content')
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Bienvenue sur MonAgence</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
                popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                extensive prebuilt components, and powerful JavaScript plugins.
            </p>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center mb-4">Nos derniers biens</h2>

        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('properties.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
