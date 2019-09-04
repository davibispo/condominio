@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Cadastro de Veículo</div>

                <div class="card-body">
                    {!! Form::model($veiculo, ['method'=>'PATCH', 'action'=>['VeiculoController@update', $veiculo->id], 'class'=>'form-horizontal']) !!}

                        <div class="form-group row">
                            {!! Form::label('tipo', 'Tipo', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-3">
                                {!! Form::select('tipo',
                                    [
                                    'Carro' => 'Carro',
                                    'Moto' => 'Moto',
                                    'Caminhonete' => 'Caminhonete',
                                    'Caminhão' => 'Caminhão',
                                    ]

                                , null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('descricao', 'Veículo', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('descricao', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'Ex: Fiat Uno Mille']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('cor', 'Cor', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-3">
                                {!! Form::select('cor',
                                    [
                                    '' => '',
                                    'Branco'    => 'Branco',
                                    'Preto'     => 'Preto',
                                    'Vermelho'  => 'Vermelho',
                                    'Azul'      => 'Azul',
                                    'Amarelo'   => 'Amarelo',
                                    'Marrom'    => 'Marrom',
                                    'Prata'     => 'Prata',
                                    'Cinza'     => 'Cinza',
                                    'Verde'     => 'Verde',
                                    ]

                                , null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('placa', 'Placa', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-3">
                                {!! Form::text('placa', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'AAA-1234', 'id'=>'placa']) !!}
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
