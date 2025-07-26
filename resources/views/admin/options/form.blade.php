@extends('admin.admin')

@section('title', $option->exists ? 'Modifier une option' : 'Ajouter une option')

@section('content')
    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}" method="POST">
        @csrf
        @method($option->exists ? 'PUT' : 'POST')

        @include('shared.input', [
            'class' => 'col',
            'label' => 'Nom',
            'name' => 'name',
            'value' => $option->name,
        ])

        <div class="form-group">
            <button class="btn btn-primary">
                @if ($option->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>
    </form>
@endsection