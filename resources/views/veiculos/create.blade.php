@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-weight:bold">Cadastrar Veículo</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'VeiculoController@store', 'class'=>'form-horizontal']) !!}

                        <div class="form-group row">
                            {!! Form::label('tipo', 'Tipo *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-3">
                                {!! Form::select('tipo',
                                    [
                                    'Carro' => 'Carro',
                                    'Moto' => 'Moto',
                                    'Caminhonete' => 'Caminhonete',
                                    'Caminhão' => 'Caminhão',
                                    'Outro' => 'Outro',
                                    ]

                                , null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('descricao', 'Veículo *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('descricao', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'Ex: Ford Fiesta Sedan']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('cor', 'Cor *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-3">
                                {!! Form::select('cor',
                                    [
                                    ''          => 'Escolha',
                                    'Branco'    => 'Branco',
                                    'Preto'     => 'Preto',
                                    'Vermelho'  => 'Vermelho',
                                    'Azul'      => 'Azul',
                                    'Amarelo'   => 'Amarelo',
                                    'Marrom'    => 'Marrom',
                                    'Prata'     => 'Prata',
                                    'Cinza'     => 'Cinza',
                                    'Verde'     => 'Verde',
                                    'Outra'     => 'Outra',
                                    ]

                                , null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('placa', 'Placa *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-3">
                                {!! Form::text('placa', null, ['class'=>'form-control', 'required', 'autofocus', 'style'=>'text-transform:uppercase', 'placeholder'=>'AAA-1234', 'id'=>'placa']) !!}
                            </div>
                        </div>

                        <p style="text-align:center">(*) Campos obrigatórios</p>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Cadastrar', ['class'=>'btn btn-dark btn-sm']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>

                <div class="container">
                    <table class="table table-hover table-sm">
                        <thead>
                            <th>Cadastrado(s)</th>
                            <th>Marca e modelo</th>
                            <th>Cor</th>
                            <th>Placa</th>
                            <th></th>
                            <th></th>
                        </thead>
                        @forelse ($veiculos as $v)
                            <tr>
                                <td>{{ $v->tipo }}</td>
                                <td>{{ $v->descricao }}</td>
                                <td>{{ $v->cor }}</td>
                                <td>{{ $v->placa }}</td>
                                <td>
                                    <a href="{{route('veiculos.edit', $v->id)}}" class="btn btn-link btn-sm">Editar</a>
                                </td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['VeiculoController@destroy', $v->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('Remover', ['class'=>'btn btn-link btn-sm']) !!}
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
