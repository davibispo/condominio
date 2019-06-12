@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pets cadastrados</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 400px;">
                        <input class="form-control" id="myInput" type="text" placeholder="Filtrar..">
                        <br>
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <tr>
                                <th>Tipo</th>
                                <th>Nome</th>
                                <th>Descricao</th>
                                <th>Obsservações</th>
                                <th>Vacinas</th>
                                <th>Dono</th>
                                <th>Unidade</th>
                            </tr>
                            @foreach ($pets as $p)
                            <tbody id="myTable" style="font-size:12px">
                                <tr>
                                    <td>{{ $p->tipo }}</td>
                                    <td>{{ $p->nome }}</td>
                                    <td>{{ $p->descricao }}</td>
                                    <td>{{ $p->obs }}</td>
                                    <td><a href="{{ route('pets.show', $p->id)}}">Ver</a></td>
                                    <td>{{ DB::table('users')->select('name')->where('id', $p->user_id)->value('name') }}</td>
                                    <td>
                                        BL {{ DB::table('unidades')->select('bloco', 'user_id')->where('user_id', $p->user_id)->value('bloco') }}
                                        Ap {{ DB::table('unidades')->select('unidade','user_id')->where('user_id', $p->user_id)->value('unidade') }}
                                    </td>
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
