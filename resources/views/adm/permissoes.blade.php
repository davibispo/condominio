@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-weight:bold">Gerenciamento de Acesso</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdmController@permissoes', 'class'=>'form-horizontal']) !!}
                        <input class="form-control" id="myInput" type="text" placeholder="Pesquisar em lista de cadastrados.." autofocus>
                        <div class="container" style="overflow:auto; height: 110px;">
                            <table class="table table-sm" style="font-size:12px">
                                @foreach ($users as $u)
                                <tbody id="myTable">
                                    <tr>
                                        <td style="background-color:rgba(0,0,0,.03); text-align:center"> 
                                            {!! Form::radio('user_id', $u->id) !!}
                                        </td>
                                        <td> {{$u->bloco}}-{{$u->apto}} </td>
                                        <td> {{$u->name}} </td>
                                        <td> {{$u->tel1}} </td>
                                        <td> {{$u->tel2}} </td>
                                    </tr>    
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <br><br>

                        <div class="form-group row">
                            {!! Form::label('status', 'Mudar para', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            
                            <div class="col-md-6">
                                <select name="status" id="" class="form-control">
                                    <option value="">Escolha</option>
                                    <option value="0">Acesso normal</option>
                                    <option value="8">Porteiro</option>
                                    <option value="9">Administrador Geral</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Salvar', ['class'=>'btn btn-dark btn-sm']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}

                    <br>
                    <div class="container" style="overflow:auto; height: 200px;">
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <thead>    
                                <tr>
                                    <th>Nome</th>
                                    <th>Unidade</th>
                                    <th>CPF</th>
                                    <th>Telefone 1</th>
                                    <th>Telefone 2</th>
                                    <th>Permissão</th>
                                </tr>
                            </thead>
                            @foreach ($users as $u)
                                @if($u->status != 0)
                                    <tbody style="font-size:12px" class="alert-info">
                                        <tr>
                                            <td> {{$u->name}} </td>
                                            <td> {{$u->bloco}}-{{$u->apto}} </td>
                                            <td> {{$u->cpf}} </td>
                                            <td> {{$u->tel1}} </td>
                                            <td> {{$u->tel2}} </td>
                                            <td> 
                                                @switch($u->status)
                                                    @case(0)
                                                        Cadastrado
                                                        @break
                                                    @case(8)
                                                        Porteiro    
                                                        @break
                                                    @case(9)
                                                        Administrador Geral    
                                                        @break
                                                    @default
                                                @endswitch     
                                            </td>
                                        </tr>
                                    </tbody>
                                @endif
                            @endforeach                       
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection