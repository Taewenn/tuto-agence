@extends('base')

@section('title', 'Connexion')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Connexion</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post" class="vstack gap-3">
                            @csrf
                            @include('shared.flash')
                            @include('shared.input', [
                                'name' => 'email',
                                'label' => 'Email',
                                'type' => 'email',
                                'required' => true,
                            ])
                            @include('shared.input', [
                                'name' => 'password',
                                'label' => 'Mot de passe',
                                'type' => 'password',
                                'required' => true,
                            ])
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
