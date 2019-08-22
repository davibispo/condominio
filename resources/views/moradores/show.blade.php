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
                                <th>Tipo</th>
                                <th>Unidade</th>
                                <th>Status</th>
                            </thead>
                            <tr>
                                <td>{{ $morador->name }}</td>
                                <td>{{ $morador->tipo }}</td>
                                <td>{{ $morador->bloco }} {{ $morador->apto}}</td>
                                <td>{{ $morador->status }}</td>
                            </tr>
                            <thead>
                                <th>Data de Nascimento</th>
                                <th>Idade</th>
                                <th>Sexo</th>
                                <th></th>
                            </thead>
                            <tr>
                                <td>{{ $morador->data_nascimento }}</td>
                                <td></td>
                                <td>{{ $morador->sexo}}</td>
                                <td></td>
                            </tr>
                            <thead>
                                <th>Telefone 1</th>
                                <th>Telefone 2</th>
                                <th>E-mail</th>
                                <th></th>
                            </thead>
                            <tr>
                                <td>{{ $morador->tel1 }}</td>
                                <td>{{ $morador->tel2 }}</td>
                                <td>{{ $morador->email}}</td>
                                <td></td>
                            </tr>
                            <thead>
                                <th>Reside com</th>
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
                            <thead>
                                <th>Veículos</th>
                                <th>Cor</th>
                                <th>Placa</th>
                                <th></th>
                            </thead>
                            @foreach ($veiculos as $v)
                            <tr>
                                <td>{{ $v->descricao }}</td>
                                <td>{{ $v->cor }}</td>
                                <td>{{ $v->placa }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                            <thead>
                                <th>Pets</th>
                                <th>Nome</th>
                                <th>Características</th>
                                <th>Obs</th>
                            </thead>
                            @foreach ($pets as $p)
                            <tr>
                                <td>{{ $p->tipo }}</td>
                                <td>{{ $p->nome }}</td>
                                <td>{{ $p->descricao }}</td>
                                <td>{{ $p->obs}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
