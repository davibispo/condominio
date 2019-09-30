@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ocorrências Registradas</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 600px;">
                        <input class="form-control" id="myInput" type="text" placeholder="Pesquisar..">
                        <br>
                        <table class="table table-sm table-hover"  style="font-size:12px;">
                            @foreach ($ocorrencias as $item)
                                @foreach ($users as $u)
                                    @if ($item->user_id == $u->id)
                                    <tbody  id="myTable">
                                        <tr style="background-color:rgba(0,0,0,.03)">
                                            <td>
                                                Data da ocorrência: <b>{{ date('d-m-Y', strtotime($item->data)) }}</b>
                                                @if ($item->foto1 || $item->foto2 || $item->foto3)
                                                    <a href="{{ route('ocorrencias.show', $item->id) }}"> - Ver Fotos</a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="8">
                                                {{ $item->descricao }} <br>
                                                <i>
                                                    <b>Assinado:</b>
                                                    @if ($item->anonimo == 1)
                                                        {{ $u->name }} - (Unidade: {{ $u->bloco }}-{{ $u->apto }} )
                                                    @else
                                                        (Anônimo)
                                                    @endif
                                                </i>
                                                <br><br>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endif
                                @endforeach
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
