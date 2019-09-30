@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pets cadastrados</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 600px;">
                        <input class="form-control" id="myInput" type="text" placeholder="Filtrar..">
                        <br>
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <tr>
                                <th></th>
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
                                    <td><img class="img-fluid" src="{{url("storage/{$p->foto}")}}" width="80" height="100" style="border: none;"/></td>
                                    <td>{{ $p->tipo }}</td>
                                    <td><b>{{ $p->nome }}</b></td>
                                    <td>{{ $p->descricao }}</td>
                                    <td>{{ $p->obs }}</td>
                                    <td><a href="{{ route('pets.show', $p->id)}}">Ver</a></td>
                                    <td>{{ DB::table('users')->select('name')->where('id', $p->user_id)->value('name') }}</td>
                                    <td>
                                        <b>{{ DB::table('users')->select('bloco')->where('id', $p->user_id)->value('bloco') }}-{{ DB::table('users')->select('apto')->where('id', $p->user_id)->value('apto') }}</b>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="container">
                        <a href="{{ route('adm.index') }}" class="btn btn-dark btn-sm" style="margin-top:15px"><i class="fas fa-reply"></i> Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
