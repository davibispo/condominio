@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gerenciar Reservas de Locais</div>

                <div class="card-body">
                    <table class="table table-sm table-hover">
                        <tr>
                            <th>Solicitante</th>
                            <th>Data solicitada</th>
                            <th>Área</th>
                            <th>Horário</th>
                            <th>Ação</th>
                        </tr>
                        @foreach ($reservas as $item)
                            @foreach ($users as $u)
                                @foreach ($areas as $a)
                                    @if ($item->user_id == $u->id && $item->locavel_area_id == $a->id)
                                    <tr>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($item->data_solicitada)) }}</td>
                                        <td>{{ $item->descricao }}</td>
                                        <td>De {{ $item->hora_inicio }} às {{ $item->hora_fim }}</td>
                                        <td></td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
