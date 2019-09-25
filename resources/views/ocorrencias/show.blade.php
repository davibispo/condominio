@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Anexos do Registro de Ocorrência</div>

                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li>
                            <a href="{{ route('ocorrencias.index') }}" class="nav-link"><i class="fas fa-reply"></i> Voltar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#descricao">Descrição</a>
                        </li>
                        <li class="nav-item">
                            @if ($ocorrencia->foto1)
                                <a class="nav-link active" data-toggle="tab" href="#home">Foto 1</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ($ocorrencia->foto2)
                                <a class="nav-link" data-toggle="tab" href="#menu1">Foto 2</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ($ocorrencia->foto3)
                                <a class="nav-link" data-toggle="tab" href="#menu2">Foto 3</a>
                            @endif
                        </li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="descricao" class="container tab-pane fade">
                            <div class="container">
                                <table class="table table-sm"  style="font-size:12px;">
                                    <tbody>
                                        <tr style="background-color:rgba(0,0,0,.03)">
                                            <td>
                                                Data da ocorrência: <b>{{ date('d-m-Y', strtotime($ocorrencia->data)) }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="8">
                                                {{ $ocorrencia->descricao }} <br>
                                                <i>
                                                    <b>Assinado:</b>
                                                    @if ($ocorrencia->anonimo == 1)
                                                        {{ $userName }} - (Unidade: {{ $userBloco }}-{{ $userApto }} )
                                                    @else
                                                        (Anônimo)
                                                    @endif
                                                </i>
                                            </td>
                                        </tr>
                                    </tbody>          
                                </table>
                            </div>  
                        </div>
                        <div id="home" class="container tab-pane active">
                            <img src="{{asset('storage/'. $ocorrencia->foto1)}}" class="img-fluid" width="100%"/>
                        </div>
                        <div id="menu1" class="container tab-pane fade">
                            <img src="{{asset('storage/'. $ocorrencia->foto2)}}" class="img-fluid" width="100%"/>
                        </div>
                        <div id="menu2" class="container tab-pane fade">
                            <img src="{{asset('storage/'. $ocorrencia->foto3)}}" class="img-fluid" width="100%"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection