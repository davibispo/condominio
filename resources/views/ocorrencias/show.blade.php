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
                        <li class="nav-item">
                            @if ($ocorrencia->foto1)
                                <a class="nav-link active" data-toggle="tab" href="#home">Anexo 1</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ($ocorrencia->foto2)
                                <a class="nav-link" data-toggle="tab" href="#menu1">Anexo 2</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ($ocorrencia->foto3)
                                <a class="nav-link" data-toggle="tab" href="#menu2">Anexo 3</a>
                            @endif
                        </li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active">
                            <iframe src="{{asset('storage/'. $ocorrencia->foto1)}}" width="700" height="780" style="border: none;"></iframe>  
                        </div>
                        <div id="menu1" class="container tab-pane fade">
                            <iframe src="{{asset('storage/'. $ocorrencia->foto2)}}" width="700" height="780" style="border: none;"></iframe>
                        </div>
                        <div id="menu2" class="container tab-pane fade">
                            <iframe src="{{asset('storage/'. $ocorrencia->foto3)}}" width="700" height="780" style="border: none;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection