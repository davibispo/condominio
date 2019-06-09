@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Cadastro de Pet</div>

                <div class="card-body">
                    {!! Form::model($pet, ['method'=>'PATCH', 'action'=>['PetController@update', $pet->id], 'class'=>'form-horizontal']) !!}

                        <div class="form-group row">
                            {!! Form::label('tipo', 'Tipo', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-3">
                                {!! Form::select('tipo',
                                    [
                                    'Cachorro' => 'Cachorro',
                                    'Gato' => 'Gato',
                                    'Outro' => 'Outro',
                                    ]

                                , null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('nome', 'Nome', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nome', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('descricao', 'Características', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                <textarea name="descricao" id="" cols="" rows="2" class="form-control">{{ $pet->descricao }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('obs', 'Observações', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                <textarea name="obs" id="" cols="" rows="3" class="form-control">{{ $pet->obs }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Atualizar', ['class'=>'btn btn-dark btn-sm']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
