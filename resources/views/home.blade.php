@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-weight:bold">Painel</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->user()->ativo == '1')
                        <b>Você está conectado!</b>
                    @else
                        Você está conectado, <b style="color:red">mas ainda sem acesso aos recursos!</b>
                    @endif    
                    <br><br>
                    <ul>
                        @if (auth()->user()->status != '8')
                            <li>Cadastre abaixo, caso tenha:</li>
                            <br>
                            <li style="list-style:none"><a href="{{ route('veiculos.create') }}"><i class="fas fa-car"></i> Veículo(s):</a> {{ $totalVeiculos }}</li>
                            <li style="list-style:none"><a href="{{ route('pets.create') }}"><i class="fas fa-paw"></i> Animais:</a> {{ $totalPets }}</li>
                            <br>
                        @endif
                        @if (auth()->user()->ativo == '1')
                            <li style="list-style:none"><i class="fas fa-check" style="color:green"></i> Cadastro ativo!</li>
                        @else
                            <li style="list-style:none">
                                <i class="fas fa-exclamation-triangle" style="color:darkgoldenrod"></i>
                                <b>Seu acesso ficará ativo quando os dados forem confirmados pelo administrador.</b>
                            </li>
                        @endif
                    </ul>
                        
                        @if (Auth::check() && auth()->user()->ativo == '1')
                            @if (auth()->user()->status == '8' or auth()->user()->status == '9')
                                <a class="btn btn-lg btn-light btn-block" href="{{ route('portaria.create') }}"><b>PORTARIA</b></a>
                            @endif
                            @if (auth()->user()->status == '9')
                                <a class="btn btn-lg btn-light btn-block" href="{{ route('adm.index') }}"><b>Administração</b></a>
                            @endif
                                <a class="btn btn-lg btn-light btn-block" href="{{ route('reservas.create') }}">Reservas</a>
                                <a class="btn btn-lg btn-light btn-block" href="{{ route('ocorrencias.create') }}">Ocorrências</a>
                                <a class="btn btn-lg btn-light btn-block" href="{{ route('files.index') }}">Arquivos</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
