@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Arquivos Disponíveis</div>

                <div class="card-body" style="overflow:auto; height: 400px;">
                    <table class="table table-sm table-hover table-striped">
                        <thead>
                            <th>Nº</th>
                            <th>Descrição</th>
                            <th><i class="fas fa-download"></i></th>
                        </thead>
                        <tbody>
                            @foreach ($arquivos as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->descricao }}</td>
                                <td><a href="{{url("storage/{$item->arquivo}")}}" target="_blank">baixar</a></td>
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
