@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Arquivos Enviados</div>

                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <th>Nº</th>
                            <th>Descrição</th>
                            <th>Baixar</th>
                        </thead>
                        <tbody>
                            @foreach ($arquivos as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->descricao }}</td>
                                <td><a href="{{url("storage/{$item->arquivo}")}}" target="_blank">Baixar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
