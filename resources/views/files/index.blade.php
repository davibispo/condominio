@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Arquivos Disponíveis</div>

                <div class="card-body" style="overflow:auto; height: 500px;">
                    <table class="table table-sm table-hover table-striped">
                        <thead>
                            <th>Descrição do arquivo</th>
                            <th style="text-align:center"><i class="fas fa-download"></i></th>
                        </thead>
                        <tbody>
                            @foreach ($arquivos as $item)
                            <tr>
                                <td>{{ $item->descricao }}</td>
                                <td style="text-align:center"><a href="{{url("storage/{$item->arquivo}")}}" target="_blank">baixar</a></td>
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
