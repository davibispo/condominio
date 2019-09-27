@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enviar Arquivos</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'ArquivoController@store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!} 

                    <div class="form-group row">
                        {!! Form::label('arquivo', 'Arquivo', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <i style="color:red">*</i>
                        <div class="col-md-6">
                            {!! Form::file('arquivo', null, ['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        {!! Form::label('descricao', 'Descrição do Arquivo', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <i style="color:red">*</i>
                        <div class="col-md-6">
                            {!! Form::text('descricao', null, ['class'=>'form-control', 'required', 'placeholder'=>'Dê um nome para o arquivo.']) !!}
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Enviar', ['class'=>'btn btn-dark btn-sm']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}

                    <br>
                    <div class="container">
                        <table class="table table-sm">
                            <thead>
                                <th>Nº</th>
                                <th>Descrição</th>
                                <th>Baixar</th>
                                <th>Excluir</th>
                            </thead>
                            <tbody>
                                @foreach ($arquivos as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->descricao }}</td>
                                    <td><a href="{{url("storage/{$item->arquivo}")}}" target="_blank">Baixar</a></td>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['ArquivoController@destroy', $item->id], 'style'=>'display:inline']) !!}
                                            {!! Form::submit('Excluir', ['class'=>'btn btn-link btn-sm', 'style'=>'color:red']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
