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
                    <br><br>
                    <ul>
                        <li>Cadastre, caso tenha:</li>
                        <br>
                        <li style="list-style:none"><a href="{{ route('veiculos.create') }}"><i class="fas fa-car"></i> Meu(s) Veículo(s):</a> {{ $totalVeiculos }}</li>
                        <br>
                        <li style="list-style:none"><a href="{{ route('pets.create') }}"><i class="fas fa-paw"></i> Meu(s) Pet(s):</a> {{ $totalPets }}</li>
                        <!--<br>
                        <li style="list-style:none"><a href="#"><i class="fas fa-shipping-fast"></i> Cadastrar meu(s) Fornecedor(es) </a></li>-->
                        <br>
                        @if (auth()->user()->ativo == '1')
                            <li style="list-style:none"><i class="fas fa-check" style="color:green"></i> Cadastro ativo!</li>
                        @else
                            <li style="list-style:none">
                                <i class="fas fa-exclamation-triangle" style="color:darkgoldenrod"></i>
                                Seu ficará ativo quando forem confirmados pelo administrador do sistema/condomínio.
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
