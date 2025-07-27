@extends('layouts.main_layout')

@section('container')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 card p-5">
                <form action="{{route('password.email')}}" method="post" novalidate>
                    @csrf
                    <p class="display-6 text-center">Recuperar Senha</p>
                    <div class="mb-3">
                        <label for="email">Indique o seu endereço de e-mail:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="mt-4 d-flex justify-content-between">
                        <div>
                            <a href="{{route('login')}}">Já sei a minha senha?</a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary px-5">RECUPERAR SENHA</button>
                        </div>
                    </div>
                </form>
                {{-- email enviado com successo --}}
                @if(session('status'))
                    <div class="text-center mt-5">
                        <p>Um email foi enviado para o seu endereço</p>
                        <a href="{{route('login')}}" class="btn btn-primary">VOLTAR</a>
                    </div>
                @endif
                {{-- errors --}}
                @if($errors->any())
                    <div class="alert alert-danger mt-4">
                        <ul class="m-0">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection