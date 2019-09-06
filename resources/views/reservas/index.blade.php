@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Gerenciar Reservas de Locais</div>

                <div class="card-body">
                    <table class="table table-sm table-hover"  style="font-size:12px">
                        <tr>
                            <th>Data solicitada</th>
                            <th>Solicitante</th>
                            <th>Unidade</th>
                            <th>Área</th>
                            <th>Horário</th>
                            <th>Solicitada em</th>
                            <th>Ação</th>
                        </tr>
                        @foreach ($reservas as $item)
                            @foreach ($users as $u)
                                @foreach ($areas as $a)
                                    @if ($item->user_id == $u->id && $item->area_locavel_id == $a->id)
                                    <tr>
                                        <td>{{ date('d-m-Y', strtotime($item->data_solicitada)) }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td> {{ $u->bloco }}-{{ $u->apto }} </td>
                                        <td>{{ $a->descricao }}</td>
                                        <td>De {{ $item->hora_inicio }} às {{ $item->hora_fim }}</td>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
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
