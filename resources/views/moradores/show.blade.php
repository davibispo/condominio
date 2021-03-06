@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-weight:bold">Detalhes de Morador</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 500px;">
                        <div>
                            <td>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#myModal">
                                    <img class="img-fluid" src="{{url("storage/{$morador->foto}")}}" width="80" height="100" style="border: none;"/>
                                </button>
                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">                                             
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <img class="img-fluid" src="{{url("storage/{$morador->foto}")}}" width="100%" style="border: none;"/>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </div>
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
                                <td>{{ date('d-m-Y', strtotime($morador->data_nascimento)) }}</td>
                                <td>
                                    @php
                                        //calculo de idade
                                        $dataAtual = date_create(date('Y-m-d'));
                                        $dataNascimento = date_create($morador->data_nascimento);
                                        $idade = date_diff($dataAtual, $dataNascimento);
                                        echo $idade->format('%y');
                                    @endphp 
                                </td>
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
                                <th>Veículos</th>
                                <th>Cor</th>
                                <th>Placa</th>
                                <th></th>
                            </thead>
                            @foreach ($veiculos as $v)
                                @if ($v->user_id == $morador->id)
                                    <tr>
                                        <td>{{ $v->descricao }}</td>
                                        <td>{{ $v->cor }}</td>
                                        <td>{{ $v->placa }}</td>
                                        <td></td>
                                    </tr>
                                @endif
                            @endforeach
                            <thead>
                                <th>Reside com</th>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th></th>
                            </thead>
                            @if ($morador->residente1)
                            <tr>
                                <td>
                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#myModal1">
                                        <img class="img-fluid" src="{{url("storage/{$morador->foto_residente1}")}}" width="80" height="100" style="border: none;"/>
                                    </button>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">                                             
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="{{url("storage/{$morador->foto_residente1}")}}" width="100%" style="border: none;"/>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $morador->residente1 }}</td>
                                <td>{{ $morador->idade_residente1 }}</td>
                                <td></td>
                            </tr>
                            @endif
                            @if ($morador->residente2)
                            <tr>
                                <td>
                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#myModal2">
                                        <img class="img-fluid" src="{{url("storage/{$morador->foto_residente2}")}}" width="80" height="100" style="border: none;"/>
                                    </button>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal2">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">                                             
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="{{url("storage/{$morador->foto_residente2}")}}" width="100%" style="border: none;"/>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $morador->residente2 }}</td>
                                <td>{{ $morador->idade_residente2 }}</td>
                                <td></td>
                            </tr>
                            @endif
                            @if ($morador->residente3)
                            <tr>
                                <td>
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#myModal3">
                                            <img class="img-fluid" src="{{url("storage/{$morador->foto_residente3}")}}" width="80" height="100" style="border: none;"/>
                                        </button>
                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal3">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">                                             
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="{{url("storage/{$morador->foto_residente3}")}}" width="100%" style="border: none;"/>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </td>
                                <td>{{ $morador->residente3 }}</td>
                                <td>{{ $morador->idade_residente3 }}</td>
                                <td></td>
                            </tr>
                            @endif
                            @if ($morador->residente4)
                            <tr>
                                <td>
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#myModal4">
                                            <img class="img-fluid" src="{{url("storage/{$morador->foto_residente4}")}}" width="80" height="100" style="border: none;"/>
                                        </button>
                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal4">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">                                             
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="{{url("storage/{$morador->foto_residente4}")}}" width="100%" style="border: none;"/>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </td>
                                <td>{{ $morador->residente4 }}</td>
                                <td>{{ $morador->idade_residente4 }}</td>
                                <td></td>
                            </tr>
                            @endif
                            @if ($morador->residente5)
                            <tr>
                                <td>
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#myModal5">
                                            <img class="img-fluid" src="{{url("storage/{$morador->foto_residente5}")}}" width="80" height="100" style="border: none;"/>
                                        </button>
                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal5">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">                                             
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="{{url("storage/{$morador->foto_residente5}")}}" width="100%" style="border: none;"/>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>    
                                </td>
                                <td>{{ $morador->residente5 }}</td>
                                <td>{{ $morador->idade_residente5 }}</td>
                                <td></td>
                            </tr>
                            @endif
                            <thead>
                                <th>Animais</th>
                                <th>Nome</th>
                                <th>Características</th>
                                <th>Obs</th>
                            </thead>
                            @foreach ($pets as $p)
                                @if ($p->user_id == $morador->id)
                                    <tr>
                                        <td>
                                            <img class="img-fluid" src="{{url("storage/{$p->foto}")}}" width="80" height="100" style="border: none;"/>
                                        </td>
                                        <td>{{ $p->nome }} ({{ $p->tipo }})</td>
                                        <td>{{ $p->descricao }}</td>
                                        <td>{{ $p->obs}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                    <div class="container">
                        <a href="{{ route('moradores.index') }}" class="btn btn-dark btn-sm" style="margin-top:15px"><i class="fas fa-reply"></i> Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
