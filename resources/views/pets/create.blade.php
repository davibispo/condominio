@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Cadastrar Pet</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'PetController@store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}

                        <div class="form-group row">
                            {!! Form::label('tipo', 'Tipo *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
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
                            {!! Form::label('nome', 'Nome do Pet *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('descricao', 'Características *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                <textarea name="descricao" id="" cols="" rows="2" class="form-control" required placeholder="Ex: Pelos pretos com detalhe amarelo."></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            {!! Form::label('foto', 'Foto', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::file('foto', null, ['class'=>'form-control']) !!}
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
                            <i style="color:red"></i>
                            <div class="col-md-6">
                                <textarea name="obs" id="" cols="" rows="3" class="form-control"></textarea>
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
                    <table class="table table-sm">
                        <thead>
                            <th>Foto</th>
                            <th>Tipo</th>
                            <th>Nome</th>
                            <th>Características</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </thead>
                        @forelse ($pets as $p)
                            <tr>
                                <td>
                                    @if ($p->foto)
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#myModal{{$p->id}}">
                                            <img class="img-fluid" src="{{url("storage/{$p->foto}")}}" width="80" height="100" style="border: none;"/>
                                        </button>
                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal{{$p->id}}">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">                                             
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="{{url("storage/{$p->foto}")}}" width="100%" style="border: none;"/>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $p->tipo }}</td>
                                <td>{{ $p->nome }}</td>
                                <td>{{ $p->descricao }}</td>
                                <td>
                                    @if ($p->vacina)
                                        <a href="{{ route('pets.show', $p->id)}}" class="btn btn-link btn-sm">Vacinas</a>
                                    @endif
                                </td>
                                <td><a href="{{ route('pets.edit', $p->id) }}" class="btn btn-link btn-sm">Editar</a></td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['PetController@destroy', $p->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('Remover', ['class'=>'btn btn-link btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7"> <i> {{$p->obs}} </i></td>
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
