@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-weight:bold">PORTARIA - GERENCIAMENTO DE VISITAS</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'PortariaController@store', 'class'=>'form-horizontal']) !!}
                        <input class="form-control" id="myInput" type="text" placeholder="Pesquisar.." autofocus>
                        <div class="container" style="overflow:auto; height: 110px;">
                            <table class="table table-sm" style="font-size:12px">
                                @foreach ($moradores as $m)
                                <tbody id="myTable">
                                    <tr>
                                        <td style="background-color:rgba(0,0,0,.03); text-align:center"> 
                                            {!! Form::radio('user_id', $m->id) !!}
                                        </td>
                                        <td> {{$m->bloco}}-{{$m->apto}} </td>
                                        <td> {{$m->name}} </td>
                                        <td> {{$m->tel1}} </td>
                                        <td> {{$m->tel2}} </td>
                                    </tr>    
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <br>

                        <div class="input-group mb-3 input-group-lg">
                            <input type="text" class="form-control" style="text-transform:uppercase; width:70%" name="nome" placeholder="Nome do visitante" autofocus required>
                            <input type="number" class="form-control" name="qtde" placeholder="Qtde" value="1" min="1" max="100" autofocus>
                        </div>
                        <div class="input-group mb-3 input-group-lg">
                            <input id="cpf" type="text" class="form-control" style="text-transform:uppercase;" name="cpf" placeholder="CPF" autofocus>
                            <input type="text" class="form-control" style="text-transform:uppercase;" name="rg" placeholder="RG" autofocus>
                        </div>
                        
                        <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-car"></i></span>
                            </div>
                            <input type="text" name="placa" id="placa" style="text-transform:uppercase" placeholder="Placa" class="form-control" autofocus>
                        
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select name="tipo" id="" class="form-control">
                                <option value="Entregador">1. Entregador</option>
                                <option value="Parente">2. Parente</option>
                                <option value="Amigo(a)">3. Amigo(a)</option>
                                <option value="Outro">4. Outro</option>
                            </select>
                        </div>

                        <div class="input-group mb-3 input-group-lg">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Salvar', ['class'=>'btn btn-dark btn']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <br>
                    <div class="container" style="overflow:auto; height: 200px;">
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
                                    @if ($v->user_id == $m->id && (date('d-m-Y', strtotime($v->created_at)) == date('d-m-Y', strtotime($dataAtual))))
                                        <tbody style="font-size:12px" class="alert-warning">
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