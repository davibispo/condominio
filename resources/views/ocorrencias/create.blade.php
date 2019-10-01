@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Registrar Ocorrência</div>

                <div class="card-body">
                    <div class="alert" style="background-color:rgba(0,0,0,.03)">
                        <p style="font-style:oblique; font-weight:bold; text-align:justify">
                            O registro de ocorrências serve para alertar a administração sobre algo que está em
                            desacordo com o Regimento Interno do Condomínio. É importante que ao registrar a ocorrência
                            você possa dar o máximo de detalhes para facilitar na busca de uma solução do ocorrido.
                        </p>
                    </div>
                    {!! Form::open(['method'=>'POST', 'action'=>'OcorrenciaController@store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}

                    <div class="form-group row">
                        {!! Form::label('data_solicitada', 'Data', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <i style="color:red">*</i>
                        <div class="col-md-3">
                            {!! Form::date('data', null, ['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>      

                    <div class="form-group row">
                        {!! Form::label('descricao', 'Descrição', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <i style="color:red">*</i>
                        <div class="col-md-6">
                            <textarea rows="6" class="form-control" name="descricao"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('anonimo', 'Assinar', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <i style="color:red">*</i>
                        <div class="col-md-4">
                            <input type="radio" name="anonimo" value="1" required> SIM
                            <br>
                            <input type="radio" name="anonimo" value="0" required> NÃO
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('', 'Fotos', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <b>&nbsp</b>
                        <div class="col-md-6">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">1</span>
                                </div>
                                <input type="file" name="foto1" class="form-control">
                            </div>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">2</span>
                                </div>
                                <input type="file" name="foto2" class="form-control">
                            </div>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">3</span>
                                </div>
                                <input type="file" name="foto3" class="form-control">
                            </div>
                        </div>
                    </div>            

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            {!! Form::submit('Registrar', ['class'=>'btn btn-dark btn-sm']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                    <div class="container">
                        <br>
                        <table class="table table-sm"  style="font-size:12px;">
                            @foreach ($ocorrencias as $item)
                                @foreach ($users as $u)
                                    @if ($item->user_id == $u->id && $item->user_id == auth()->user()->id)
                                    <tbody  id="myTable">
                                        <tr style="background-color:rgba(0,0,0,.03)">
                                            <td>Data da ocorrência: <b>{{ date('d-m-Y', strtotime($item->data)) }}</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="8" style="text-align:justify">
                                                {{ $item->descricao }} <br>
                                                <i>
                                                    <b>Assinado:</b>
                                                    @if ($item->anonimo == 1)
                                                        {{ $u->name }} - (Unidade: {{ $u->bloco }}-{{ $u->apto }} )
                                                    @else
                                                        (Anônimo)
                                                    @endif
                                                </i>
                                                <br>
                                                @if ($item->foto1)
                                                    <img class="img-fluid" src="{{url("storage/{$item->foto1}")}}" width="80" height="100" style="border: none;"/>
                                                @endif
                                                @if ($item->foto2)
                                                    <img class="img-fluid" src="{{url("storage/{$item->foto2}")}}" width="80" height="100" style="border: none;"/>
                                                @endif
                                                @if ($item->foto3)
                                                    <img class="img-fluid" src="{{url("storage/{$item->foto3}")}}" width="80" height="100" style="border: none;"/>
                                                @endif                                                
                                                <br><br>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endif
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
