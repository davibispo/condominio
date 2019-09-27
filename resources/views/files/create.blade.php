@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enviar Arquivos</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'ArquivoController@store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!} 

                    <div class="form-group row">
                        {!! Form::label('arquivo', 'Arquivo', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <i style="color:red">*</i>
                        <div class="col-md-6">
                            {!! Form::file('arquivo', null, ['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        {!! Form::label('descricao', 'Descrição do Arquivo', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <i style="color:red">*</i>
                        <div class="col-md-6">
                            {!! Form::text('descricao', null, ['class'=>'form-control', 'required', 'placeholder'=>'Dê um nome para o arquivo.']) !!}
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Enviar', ['class'=>'btn btn-dark btn-sm']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
