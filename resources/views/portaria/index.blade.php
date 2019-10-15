@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">PORTARIA - HISTÓRICO</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 500px;">
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <thead>    
                                <tr>
                                    <th>Unidade</th>
                                    <th>Visistante</th>
                                    <th>Tipo</th>
                                    <th>Qtde</th>
                                    <th>Placa</th>
                                    <th>Documento</th>
                                    <th>Data e Hora</th>
                                </tr>
                            </thead>
                            @forelse ($visitantes as $v)
                                @foreach ($moradores as $m)
                                    @if ($v->user_id == $m->id)
                                        <tbody style="font-size:12px">
                                            <tr>
                                                <td>{{ $m->bloco }}-{{ $m->apto }}</td>
                                                <td>{{ $v->nome }}</td>
                                                <td>{{ $v->tipo }}</td>
                                                <td>{{ $v->qtde }}</td>
                                                <td>{{ $v->placa }}</td>
                                                <td>{{ $v->cpf }} - {{ $v->rg }} </td>
                                                <td>{{ date('d-m-Y H:i:s', strtotime($v->created_at)) }}</td>
                                            </tr>
                                        </tbody>
                                    @endif
                                @endforeach
                            @empty
                            
                            <div class="alert alert-warning">
                                <p>Não há visitas cadastradas ainda!</p>
                            </div>
                            
                            @endforelse
                        </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection