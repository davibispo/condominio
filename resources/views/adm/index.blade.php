@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Administração de Recursos</div>

                <div class="card-body">
                    <a class="dropdown-item" href="{{ route('moradores.index') }}">Moradores</a>
                    <a class="dropdown-item" href="{{ route('ocorrencias.index') }}">Ocorrências</a>
                    <a class="dropdown-item" href="{{ route('files.create') }}">Arquivos</a>
                    <a class="dropdown-item" href="{{ route('locavel-areas.create') }}">Locais</a>
                    <a class="dropdown-item" href="{{ route('reservas.index') }}">Reservas</a>
                    <a class="dropdown-item" href="{{ route('veiculos.index') }}">Veículos</a>
                    <a class="dropdown-item" href="{{ route('pets.index') }}">Animais</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
