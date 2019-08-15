@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Moradores Cadastrados</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 400px;">
                        <input class="form-control" id="myInput" type="text" placeholder="Filtrar..">
                        <br>
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <tr>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>Unidade</th>
                                <th>Telefone 1</th>
                                <th>Telefone 2</th>
                                <th>E-mail</th>
                                <th>Ativar</th>
                                <th>Status</th>
                            </tr>
                            @foreach ($users as $item)
                            <tbody id="myTable" style="font-size:12px">
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->tipo }}</td>
                                    <td></td>
                                    <td>{{ $item->tel1 }}</td>
                                    <td>{{ $item->tel2 }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if ($item->ativo == 1)

                                            <a href="{{ route('moradores.edit', $item->id) }}"><i class="fas fa-toggle-on" style="color:green"></i></a>
                                        @else

                                            <a href="{{ route('moradores.edit', $item->id) }}"><i class="fas fa-toggle-off" style="color:red"></i></a>
                                        @endif


                                    </td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
