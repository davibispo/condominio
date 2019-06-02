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
                            {!! Form::label('descricao', 'Veículo', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('descricao', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'Marca, Modelo']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('cor', 'Cor', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-2">
                                {!! Form::select('cor',
                                    [
                                    '' => '',
                                    'branco' => 'branco',
                                    'preto' => 'preto',
                                    'vermelho' => 'vermelho',
                                    'azul' => 'azul',
                                    'amarelo' => 'amarelo',
                                    'marrom' => 'marrom',
                                    'prata' => 'prata',
                                    'cinza' => 'cinza',
                                    'verde' => 'verde',
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
                                {!! Form::submit('Cadastrar', ['class'=>'btn btn-dark']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>

                <div class="container">
                    <table class="table">
                        @forelse ($veiculos as $v)
                            <tr>
                                <td>{{ $v->descricao }}</td>
                                <td>{{ $v->cor }}</td>
                                <td>{{ $v->placa }}</td>
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
