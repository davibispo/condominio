@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pets cadastrados</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 500px;">
                        <input class="form-control" id="myInput" type="text" placeholder="Filtrar..">
                        <br>
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <tr>
                                <th></th>
                                <th>Dono</th>
                                <th>Unidade</th>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>Descricao</th>
                                <th>Vacinas</th>
                                <th>Obsservações</th>
                            </tr>
                            @foreach ($pets as $p)
                            <tbody id="myTable" style="font-size:12px">
                                <tr>
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#myModal{{$p->id}}">
                                            <img class="img-fluid" src="{{url("storage/{$p->foto}")}}" width="80" height="100" style="border: none;"/>
                                        </button>
                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal{{$p->id}}">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">                                             
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="{{url("storage/{$p->foto}")}}" width="100%" style="border: none;"/>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ DB::table('users')->select('name')->where('id', $p->user_id)->value('name') }}</td>
                                    <td><b>{{ DB::table('users')->select('bloco')->where('id', $p->user_id)->value('bloco') }}-{{ DB::table('users')->select('apto')->where('id', $p->user_id)->value('apto') }}</b></td>
                                    <td><b>{{ $p->nome }}</b></td>
                                    <td>{{ $p->tipo }}</td>
                                    <td>{{ $p->descricao }}</td>
                                    <td><a href="{{ route('pets.show', $p->id)}}">Ver</a></td>
                                    <td>{{ $p->obs }}</td>
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
