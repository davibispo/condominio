@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Veículos</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 500px;">
                        <input class="form-control" id="myInput" type="text" placeholder="Filtrar..">
                        <br>
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <tr>
                                <th>Tipo</th>
                                <th>Veículo</th>
                                <th>Cor</th>
                                <th>Placa</th>
                                <th>Proprietário</th>
                                <th>Unidade</th>
                            </tr>
                            @foreach ($veiculos as $v)
                            <tbody id="myTable" style="font-size:12px">
                                <tr>
                                    <td>{{ $v->tipo }}</td>
                                    <td>{{ $v->descricao }}</td>
                                    <td>{{ $v->cor }}</td>
                                    <td><b>{{ $v->placa }}</b></td>
                                    <td>{{ DB::table('users')->select('name')->where('id', $v->user_id)->value('name') }}</td>
                                    <td>
                                        <b>{{ DB::table('users')->select('bloco')->where('id', $v->user_id)->value('bloco') }}-{{ DB::table('users')->select('apto')->where('id', $v->user_id)->value('apto') }}</b>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="container">
                        <a href="{{ route('adm.index') }}" class="btn btn-dark btn-sm" style="margin-top:15px"><i class="fas fa-reply"></i> Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
