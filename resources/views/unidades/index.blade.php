@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Unidades</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 400px;">
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Proprietário</td>
                                <td>Inquilino</td>
                            </tr>
                            @forelse ($unidades as $u)
                            <tr>
                                <td>Bloco: {{ $u->bloco }}</td>
                                <td>Apto: {{ $u->unidade }}</td>
                                <td>
                                    @foreach ($users as $user)
                                        @if ($u->user_id == $user->id && $user->tipo == 'Proprietário')
                                            <b>{{ $user->name }}</b>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($users as $user)
                                        @if ($u->user_id == $user->id && $user->tipo == 'Inquilino')
                                            <b>{{ $user->name }}</b>
                                        @endif
                                    @endforeach
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
                        <a href="{{ route('unidades.create') }}" class="btn btn-sm btn-dark">Cadastrar/Editar Unidade</a>
                        <a href="{{ route('unidades.cadastro') }}" class="btn btn-sm btn-dark">Cadastrar Morador em Unidade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
