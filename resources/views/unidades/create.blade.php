@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar ou Editar Unidades</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 350px;">
                        <table class="table table-sm table-striped" style="font-size:10px">
                            @forelse ($unidades as $u)
                            <tr>
                                <td>Bloco: {{ $u->bloco }}</td>
                                <td>Apto: {{ $u->unidade }}</td>
                                <td><a href="{{route('unidades.edit', $u->id)}}">Editar</a></td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['UnidadeController@destroy', $u->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('Excluir', ['class'=>'btn btn-link btn-sm', 'style'=>'font-size:10px; padding:0px' ]) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                        <div class="alert alert-warning">
                                <p>Não há unidades cadastradas!</p>
                            </div>
                            @endforelse

                        </table>
                    </div>
                    <br>
                    <div class="container">
                        {!!Form::open(['method'=>'post', 'action'=>'UnidadeController@store', 'class'=>'form-inline'])!!}

                            <div class="form-group">
                                <div class="col-md-4">
                                    <a href="{{ route('unidades.index') }}" class="btn btn-dark btn-sm"><</a>
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('bloco', 'Bloco:', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                                <div class="col-md-2">
                                    {!! Form::number('bloco', null, ['class'=>'form-control', 'min'=>'1', 'max'=>'100', 'required', 'autofocus']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('unidade', 'Apartamento:', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                                <div class="col-md-2">
                                    {!! Form::number('unidade', null, ['class'=>'form-control', 'min'=>'0', 'max'=>'1000', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2">
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
