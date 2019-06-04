@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Áreas Locáveis</div>

                <div class="card-body">
                        <div class="container" style="overflow:auto; height: 400px;">
                            <table class="table table-sm table-striped" style="font-size:10px">
                                <tr>
                                    <th>Local</th>
                                    <th>Valor Aluguel</th>
                                    <th>Observações</th>
                                </tr>
                                @forelse ($areas as $a)
                                <tr>
                                    <td>{{ $a->descricao }}</td>
                                    <td>R$ {{ $a->valor }}</td>
                                    <td>{{ $a->obs }}</td>
                                </tr>
                            @empty
                                <div class="alert alert-warning">
                                    <p>Não há veículos cadastrados!</p>
                                </div>
                                @endforelse
                            </table>
                        </div>
                        <br>
                        <div class="container">
                            <a href="{{ route('locavel-areas.create') }}" class="btn btn-sm btn-dark">Cadastrar Locais</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
