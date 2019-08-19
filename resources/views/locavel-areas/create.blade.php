@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Cadastrar Áreas Locáveis</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'post', 'action'=>'LocavelAreaController@store', 'class'=>'form-horizontal']) !!}

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
                                <textarea name="obs" id="" cols="" rows="4" class="form-control" placeholder="Ex: Horário de término - 22h"></textarea>
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
                            <th colspan="5">Áreas cadastradas</th>
                        </thead>
                        @forelse ($areas as $a)
                            <tr>
                                <td>{{ $a->descricao }}</td>
                                <td>R$ {{ $a->valor }}</td>
                                <td>{{ $a->obs }}</td>
                                <td><a href="{{ route('locavel-areas.edit', $a->id) }}" class="btn btn-link btn-sm">Editar</a></td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['LocavelAreaController@destroy', $a->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('Remover', ['class'=>'btn btn-link btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-warning">
                                <p>Nenhum local cadastrado!</p>
                            </div>
                        @endforelse

                    </table>
                    <a href="{{ route('locavel-areas.index') }}" class="btn btn-dark btn-sm"><i class="fas fa-reply"></i> Voltar</a>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
