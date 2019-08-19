@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalhes de Morador</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 400px;">
                        
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <thead>
                                <th>Nome</th>
                                <th>Unidade</th>
                                <th>Telefones</th>
                                <th>CPF</th>
                            </thead>
                            <tr>
                                <td>{{ $morador->name }}</td>
                                <td>{{ $morador->bloco }} {{ $morador->apto }}</td>
                                <td>{{ $morador->tel1 }} - {{ $morador->tel2 }}</td>
                                <td>{{ $morador->cpf }}</td>
                            </tr>
                            <thead>
                                <th>Sexo</th>
                                <th>Nascimento</th>
                                <th>Idade</th>
                                <th>E-mail</th>
                            </thead>
                            <tr>
                                <td>{{ $morador->sexo }}</td>
                                <td>{{ $morador->data_nascimento }}</td>
                                <td></td>
                                <td>{{ $morador->email }}</td>
                            </tr>
                            <thead>
                                <th>Residentes</th>
                                <th>Idade</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tr>
                                <td>{{ $morador->residente1 }}</td>
                                <td>{{ $morador->idade_residente1 }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{ $morador->residente2 }}</td>
                                <td>{{ $morador->idade_residente2 }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{ $morador->residente3 }}</td>
                                <td>{{ $morador->idade_residente3 }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>    
                                <td>{{ $morador->residente4 }}</td>
                                <td>{{ $morador->idade_residente4 }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{ $morador->residente5 }}</td>
                                <td>{{ $morador->idade_residente5 }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
