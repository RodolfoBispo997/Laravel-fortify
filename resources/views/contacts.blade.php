@extends('layouts.main_layout')

@section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <p class="display-6 text-info">Está Página está acessível a usuários logados e não logados</p>
                <hr>
                @auth
                    <p class="display-6 text-success">Este texto só vai ser apresentado para usuários logados</p>                    
                @endauth
                @guest
                    <p class="display-6 text-success">Este texto só vai ser apresentado para usuários visitantes</p>
                @endguest
            </div>
        </div>
    </div>
@endsection