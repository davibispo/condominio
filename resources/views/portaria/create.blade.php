@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PORTARIA - GERENCIAMENTO DE ENTRADAS</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'PortariaController@store', 'class'=>'form-horizontal']) !!}
                        <input class="form-control" id="myInput" type="text" placeholder="Pesquisar.." autofocus>
                        <div class="container" style="overflow:auto; height: 110px;">
                            <table class="table table-sm" style="font-size:12px">
                                
                                @foreach ($moradores as $m)
                                <tbody id="myTable">
                                    <tr>
                                        <td> {{$m->bloco}}-{{$m->apto}} </td>
                                        <td> {{$m->name}} </td>
                                        <td> {{$m->tel1}} </td>
                                        <td> {{$m->tel2}} </td>
                                        <td style="background-color:rgba(0,0,0,.03); text-align:center"> 
                                            <input type="radio" name="user_id" value="user_id"> 
                                        </td>
                                    </tr>    
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <br>

                        <div class="input-group mb-3 input-group-lg">
                            <input type="text" class="form-control" placeholder="Nome do visitante" autofocus>
                            <input type="text" class="form-control" placeholder="CPF ou RG" autofocus>
                        </div>
                        
                        <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-car"></i></span>
                            </div>
                            <input type="text" id="placa" style="text-transform:uppercase" placeholder="Placa" class="form-control" autofocus>
                        </div>

                        <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select name="tipo" id="" class="form-control">
                                <option value="">1. Entregador</option>
                                <option value="">2. Parente</option>
                                <option value="">3. Amigo</option>
                                <option value="">4. Outro</option>
                            </select>
                        </div>

                        <div class="input-group mb-3 input-group-lg">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Salvar', ['class'=>'btn btn-dark btn']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection