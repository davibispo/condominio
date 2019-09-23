@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Registrar Ocorrência</div>

                <div class="card-body">
                    <div class="alert alert-secondary">
                        <p>
                            O registro de ocorrências serve para alertar a administração sobre algo que está em
                            desacordo com o Regimento Interno do Condomínio. É importante que ao registrar a ocorrência
                            você possa dar o máximo de detalhes paa facilitar na busca de uma solução do ocorrido.
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
                        {!! Form::label('', 'Fotos', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <b>&nbsp</b>
                        <div class="col-md-4">
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

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            {!! Form::submit('Registrar', ['class'=>'btn btn-dark btn-sm']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
