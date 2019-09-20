@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Gerenciar Reservas de Locais</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 600px;">
                    <table class="table table-sm table-hover"  style="font-size:12px;">
                        <thead>
                            <th>Data solicitada</th>
                            <th>Unidade</th>
                            <th>Solicitante</th>
                            <th>Local</th>
                            <th>Horário</th>
                            <th>Solicitada em</th>
                            <th>Status</th>
                            <th>Liberar</th>
                        </thead>
                        @foreach ($reservas as $item)
                            @foreach ($users as $u)
                                @foreach ($areas as $a)
                                    @if ($item->user_id == $u->id && $item->locavel_area_id == $a->id)
                                    <tr>
                                        <th>{{ date('d-m-Y', strtotime($item->data_solicitada)) }}</th>
                                        <td> {{ $u->bloco }}-{{ $u->apto }} </td>
                                        <td>{{ $u->name }}</td>
                                        <td>
                                            @switch($item->locavel_area_id)
                                                @case(1)
                                                    <b style="color:forestgreen">{{ $a->descricao }}</b>
                                                    @break
                                                @case(2)
                                                    <b style="color:darkorchid">{{ $a->descricao }}</b>
                                                    @break
                                                @case(3)
                                                    <b style="color:deeppink">{{ $a->descricao }}</b>
                                                    @break
                                                @case(4)
                                                    <b style="color:goldenrod">{{ $a->descricao }}</b>
                                                    @break
                                                @case(5)
                                                    <b style="color:cornflowerblue">{{ $a->descricao }}</b>
                                                    @break
                                                @default
                                                    
                                            @endswitch
                                            
                                        </td>
                                        <td>De {{ $item->hora_inicio }} às {{ $item->hora_fim }}</td>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                        <td> 
                                            @if ($item->status == 1)
                                                <i style="">Solicitado</i>
                                            @else
                                                <b style="color:blue">LIBERADO</b>
                                            @endif     
                                        </td>
                                        <td>
                                            @if ($item->data_solicitada >= $dataAtual)
                                                @if ($item->status == 1)
                                                    <a href="{{ route('reservas.edit', $item->id) }}"><i class="fas fa-toggle-off" style="color:red"></i></a> 
                                                @else
                                                    <a href="{{ route('reservas.edit', $item->id) }}"><i class="fas fa-toggle-on" style="color:green"></i></a>
                                                @endif
                                            @endif                                            
                                        </td>
                                        
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
</div>
@endsection
