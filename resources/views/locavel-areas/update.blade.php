@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Área Locável</div>

                <div class="card-body">
                    {!! Form::model($area, ['method'=>'PATCH', 'action'=>['LocavelAreaController@update', $area->id], 'class'=>'form-horizontal']) !!}

                        <div class="form-group row">
                            {!! Form::label('descricao', 'Local', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('descricao', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'Ex: Churrasqueira 1']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('valor', 'Valor do aluguel R$', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-3">
                                {!! Form::text('valor', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'Ex: 20,00']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('obs', 'Observações', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                <textarea name="obs" id="" cols="" rows="4" class="form-control" placeholder="Ex: Horário de término - 22h"> {{ $area->obs}} </textarea>
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
