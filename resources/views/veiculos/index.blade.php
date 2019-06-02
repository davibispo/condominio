@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Veículos</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 400px;">
                        <table class="table table-sm table-striped" style="font-size:10px">
                            @forelse ($veiculos as $v)
                            <tr>
                                <td>Veículo: {{ $v->descricao }}</td>
                                <td>Cor: {{ $v->cor }}</td>
                                <td>Placa: {{ $v->placa }}</td>
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
                        <a href="{{ route('veiculos.create') }}" class="btn btn-sm btn-dark">Cadastrar/Editar Veículo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
