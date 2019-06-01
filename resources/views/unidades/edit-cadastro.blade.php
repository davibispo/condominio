@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Atualizar Cadastro de Proprietário da Unidade </div>

                <div class="card-body">

                    <div class="container">
                        {!! Form::model($unidade,['method'=>'POST', 'action'=>['UnidadeController@updateCadastro', $unidade->id], 'class'=>'form-inline']) !!}

                            @foreach ($unidades as $u)
                                @foreach ($users as $user)
                                    @if ($u->user_id == $user->id && $unidade->id == $u->id)
                                        <h3>
                                            Bloco {{ $unidade->bloco }} - Apto {{ $unidade->unidade }}: {{ $user->name }}</h3>
                                    @endif
                                @endforeach
                            @endforeach

                            <div class="form-group">
                                <div class="col-md-4">
                                    <select name="user_id" id="" class="form-control">
                                        <option value="">Escolher</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2">
                                    {!! Form::submit('Atualizar', ['class'=>'btn btn-dark btn-sm']) !!}
                                </div>
                            </div>
                            <br>
                            <a href="{{ route('unidades.cadastro') }}" class="btn btn-dark btn-sm"><</a>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
