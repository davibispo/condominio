@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Gerenciamento de Recursos</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <td><i class="fas fa-users"></i></td>
                            <td><a class="dropdown-item" href="{{ route('moradores.index') }}">Moradores</a></td>
                            <td>{{ $totalMoradores }}</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-book"></i></td>
                            <td><a class="dropdown-item" href="{{ route('ocorrencias.index') }}">Ocorrências</a></td>
                            <td>{{ $totalOcorrencias }}</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-folder-open"></i></td>
                            <td><a class="dropdown-item" href="{{ route('files.create') }}">Arquivos</a></td>
                            <td>{{ $totalFiles }}</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-home"></i></td>
                            <td><a class="dropdown-item" href="{{ route('locavel-areas.create') }}">Locais</a></td>
                            <td>{{ $totalLocais }}</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-calendar-day"></i></td>
                            <td><a class="dropdown-item" href="{{ route('reservas.index') }}">Reservas</a></td>
                            <td>{{ $totalReservas }}</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-car"></i></td>
                            <td><a class="dropdown-item" href="{{ route('veiculos.index') }}">Veículos</a></td>
                            <td>{{ $totalVeiculos }}</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-cat"></i></td>
                            <td><a class="dropdown-item" href="{{ route('pets.index') }}">Animais</a></td>
                            <td>{{ $totalPets }}</td>
                        </tr>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
