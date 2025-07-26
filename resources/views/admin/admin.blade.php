<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/js/tom-select.complete.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.property.index') }}">Agence</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
                $route = request()->route()->getName();
            @endphp
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) aria-current="page"
                            href="{{ route('admin.property.index') }}">Gérer les biens</a>
                    </li>
                    <li class="nav-item">
                        <a @class(['nav-link', 'active' => str_contains($route, 'option.')]) href="{{ route('admin.option.index') }}">Gérer les options</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex ms-auto align-items-center gap-3">
                @auth
                    <span class="nav-link text-white">
                        {{ Auth::user()->email }}
                    </span>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="nav-link text-white">Se déconnecter</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @include('shared.flash')

        @yield('content')
    </div>
</body>

<script>
    new TomSelect('select[multiple]', {
        plugins: {
            remove_button: {
                title: 'Supprimer',
            },
        },
    });
</script>

</html>
