@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Pet</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'PetController@store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}

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
                            {!! Form::label('nome', 'Nome do Pet', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nome', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('descricao', 'Características', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                <textarea name="descricao" id="" cols="" rows="2" class="form-control" required placeholder="Ex: Pelos pretos com detalhe amarelo."></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('vacina', 'Cartão de Vacina', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::file('vacina', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('obs', 'Observações', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                <textarea name="obs" id="" cols="" rows="3" class="form-control"></textarea>
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
                    <table class="table table-hover table-sm">
                        <thead>
                            <th>Cadastrado(s)</th>
                            <th>Nome</th>
                            <th>Características</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </thead>
                        @forelse ($pets as $p)
                            <tr>
                                <td>{{ $p->tipo }}</td>
                                <td>{{ $p->nome }}</td>
                                <td>{{ $p->descricao }}</td>
                                <td><a href="{{ route('pets.show', $p->id)}}" class="btn btn-link btn-sm">Vacinas</a></td>
                                <td><a href="{{ route('pets.edit', $p->id) }}" class="btn btn-link btn-sm">Editar</a></td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['PetController@destroy', $p->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('Remover', ['class'=>'btn btn-link btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-warning">
                                <p>Nenhum Pet cadastrado!</p>
                            </div>
                        @endforelse

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
