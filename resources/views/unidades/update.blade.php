@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Atualizar Unidade</div>

                <div class="card-body">
                    {!! Form::model($unidade,['method'=>'PATCH', 'action'=>['UnidadeController@update', $unidade->id], 'class'=>'form-horizontal']) !!}

                        <div class="form-group row">
                            {!! Form::label('bloco', 'Bloco', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-2">
                                {!! Form::number('bloco', null, ['class'=>'form-control', 'min'=>'1', 'max'=>'100', 'required', 'autofocus']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('unidade', 'Apartamento', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-2">
                                {!! Form::number('unidade', null, ['class'=>'form-control', 'min'=>'0', 'max'=>'1000', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Atualizar', ['class'=>'btn btn-dark']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
