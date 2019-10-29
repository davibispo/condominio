@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-weight:bold">Moradores Cadastrados</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 500px;">
                        <input class="form-control" id="myInput" type="text" placeholder="Pesquisar..">
                        <br>
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <tr>
                                <th><i class="fas fa-search"></i></th>
                                <th style="width:5%">Unidade</th>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th style="width:10%">CPF</th>
                                <th style="width:12%">Telefone 1</th>
                                <th style="width:12%">Telefone 2</th>
                                <th>E-mail</th>
                                <th>Ativo</th>
                                <th>Reside</th>
                            </tr>
                            @foreach ($users as $item)
                            <tbody id="myTable" style="font-size:12px">
                                <tr>
                                    <td style="font-size: 10px">
                                        <a href="{{ route('moradores.show', $item->id) }}">
                                            <i class="fas fa-search" data-toggle="tooltip" data-placement="top" title="Detalhes"></i>
                                        </a>
                                    </td>
                                    <td>{{ $item->bloco }}-{{ $item->apto }} </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->tipo }}</td>
                                    <td>{{ $item->cpf }}</td>
                                    <td>{{ $item->tel1 }}</td>
                                    <td>{{ $item->tel2 }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if ($item->ativo == 1)
                                            <a href="{{ route('moradores.edit', $item->id) }}"><i class="fas fa-toggle-on" style="color:green"></i></a>
                                        @else
                                            <a href="{{ route('moradores.edit', $item->id) }}"><i class="fas fa-toggle-off" style="color:red"></i></a>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->reside == 1)
                                            Sim
                                            @else
                                                <b>Não</b>
                                        @endif
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
