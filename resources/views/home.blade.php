@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está concetado!
                    <ul>
                        @if (auth()->user()->ativo == '1')
                            <li><a href="">Ir para Menu</a></li>
                        @else
                            <li>Mas...</li>
                            <li><b>Seu cadastro não está ativo ainda.</b> Você estará ativo quando os dados forem confirmados pelo administrador do sistema.</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
