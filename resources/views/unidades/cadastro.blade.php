@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Proprietários em Unidades</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 400px;">
                        <table class="table table-sm table-striped" style="font-size:10px">
                            @forelse ($unidades as $u)
                            <tr>
                                <td>Bloco: {{ $u->bloco }}</td>
                                <td>Apto: {{ $u->unidade }}</td>
                                <td>
                                    @foreach ($users as $user)
                                        @if ($u->user_id == $user->id)
                                            {{ $user->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    {!!Form::open(['method'=>'post', 'action'=>'UnidadeController@storeCadastro', 'class'=>'form-inline'])!!}
                                        @if ($u->user_id == null)
                                        <input type="hidden" name="id" value="{{ $u->id }}">
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <select name="user_id" id="">
                                                    <option value="">Proprietário</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-2">
                                                {!! Form::submit('Cadastrar', ['class'=>'btn btn-link btn-sm', 'style'=>'font-size:10px; padding:0px']) !!}
                                            </div>
                                        </div>
                                        @else
                                            <a href="{{route('unidades.edit-cadastro', $u->id)}}">Editar</a>
                                        @endif
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
                </div>

                <div class="container">
                    <div class="col-md-4">
                        <a href="{{ route('unidades.index') }}" class="btn btn-dark btn-sm"><</a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection
