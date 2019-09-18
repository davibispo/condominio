@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Áreas Comuns</div>

                <div class="card-body">

                    <div class="container">
                        <table class="table table-hover table-sm" style="font-size: 12px">
                            <thead>
                                <th colspan="5" style="text-align:center">Áreas cadastradas</th>
                            </thead>
                            @forelse ($areas as $a)
                                <tr>
                                    <th>{{ $a->descricao }}</th>
                                    <td>R$ {{ $a->valor }}</td>
                                    <td>{{ $a->obs }}</td>
                                    <td><a href="{{ route('locavel-areas.edit', $a->id) }}" class="btn btn-link btn-sm" style="font-size:12px">Editar</a></td>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['LocavelAreaController@destroy', $a->id], 'style'=>'display:inline']) !!}
                                            {!! Form::submit('Remover', ['class'=>'btn btn-link btn-sm', 'style'=>'font-size:12px; color:red;']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-warning">
                                    <p>Nenhum local cadastrado!</p>
                                </div>
                            @endforelse
                        </table>
                    </div>
                    <hr>
                    <div class="alert alert-secondary">
                        <b>Cadastrar Área</b>


                        {!! Form::open(['method'=>'post', 'action'=>'LocavelAreaController@store', 'class'=>'form-horizontal']) !!}

                            <div class="form-group row">
                                {!! Form::label('descricao', 'Local', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                                <i style="color:red">*</i>
                                <div class="col-md-6">
                                    {!! Form::text('descricao', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'Ex: Churrasqueira 1']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('valor', 'Valor do aluguel R$', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                                <i style="color:red">*</i>
                                <div class="col-md-3">
                                    {!! Form::text('valor', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'Ex: 20,00']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('obs', 'Observações', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('obs', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'Ex: Desconto de 50% para adimplentes']) !!}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    {!! Form::submit('Cadastrar', ['class'=>'btn btn-dark btn-sm']) !!}
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
