@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Veículo</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'VeiculoController@store', 'class'=>'form-horizontal']) !!}

                        <div class="form-group row">
                            {!! Form::label('tipo', 'Tipo', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-2">
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
                            <div class="col-md-2">
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
                                {!! Form::text('placa', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'AAA-1234']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Cadastrar', ['class'=>'btn btn-dark btn-sm']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>

                <div class="container">
                    <table class="table table-striped table-sm">
                        @forelse ($veiculos as $v)
                            <tr>
                                <td>{{ $v->tipo }}</td>
                                <td>{{ $v->descricao }}</td>
                                <td>{{ $v->cor }}</td>
                                <td>{{ $v->placa }}</td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['VeiculoController@destroy', $v->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('Remover', ['class'=>'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-warning">
                                <p>Nenhum veículo cadastrado!</p>
                            </div>
                        @endforelse

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
