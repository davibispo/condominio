@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Unidades</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 400px;">
                        <table class="table table-sm table-striped" style="font-size:10px">
                            @forelse ($unidades as $u)
                            <tr>
                                <td>Bloco: {{ $u->bloco }}</td>
                                <td>Apto: {{ $u->unidade }}</td>
                                <td>{{ $u->user_id }}</td>
                            </tr>
                        @empty
                        <div class="alert alert-warning">
                                <p>Não há unidades cadastradas!</p>
                            </div>
                            @endforelse

                        </table>
                    </div>
                    <br>
                    <a href="{{ route('unidades.create') }}" class="btn btn-sm btn-dark">Cadastrar ou Editar Unidades</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
