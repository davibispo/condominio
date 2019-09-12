@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                            <th>Status</th>
                            <th>Ação</th>
                        </tr>
                        @foreach ($reservas as $item)
                            @foreach ($users as $u)
                                @foreach ($areas as $a)
                                    @if ($item->user_id == $u->id && $item->locavel_area_id == $a->id)
                                    <tr>
                                        <th>{{ date('d-m-Y', strtotime($item->data_solicitada)) }}</th>
                                        <td>{{ $u->name }}</td>
                                        <td> {{ $u->bloco }}-{{ $u->apto }} </td>
                                        <td>{{ $a->descricao }}</td>
                                        <td>De {{ $item->hora_inicio }} às {{ $item->hora_fim }}</td>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                        <td> 
                                            @if ($item->status == 1)
                                                <b style="color:brown">Solicitado</b>
                                                @else
                                                <b style="color:green">LIBERADO</b>
                                            @endif     
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr><td colspan="8"> {{ $item->obs }} </td></tr>
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
