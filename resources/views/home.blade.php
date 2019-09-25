@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->user()->ativo == '1')
                        <b>Você está concetado!</b>
                    @else
                        Você está concetado, <b style="color:red">mas ainda sem acesso aos recursos!</b>
                    @endif    
                    <br><br>
                    <ul>
                        <li>Cadastre abaixo, caso tenha:</li>
                        <br>
                        <li style="list-style:none"><a href="{{ route('veiculos.create') }}"><i class="fas fa-car"></i> Veículo(s):</a> {{ $totalVeiculos }}</li>
                        <br>
                        <li style="list-style:none"><a href="{{ route('pets.create') }}"><i class="fas fa-paw"></i> Animais:</a> {{ $totalPets }}</li>
                        <!--<br>
                        <li style="list-style:none"><a href="#"><i class="fas fa-shipping-fast"></i> Cadastrar meu(s) Fornecedor(es) </a></li>-->
                        <br>
                        @if (auth()->user()->ativo == '1')
                            <li style="list-style:none"><i class="fas fa-check" style="color:green"></i> Cadastro ativo!</li>
                        @else
                            <li style="list-style:none">
                                <i class="fas fa-exclamation-triangle" style="color:darkgoldenrod"></i>
                                <b>Seu acesso ficará ativo quando os dados forem confirmados pelo administrador.</b>
                            </li>
                        @endif
                    </ul>

                    <!-- Gráficos inicio -->
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load("current", {packages:["corechart"]});
                        google.charts.setOnLoadCallback(drawChart);
                        
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Task', 'Hours per Day'],
                                ['Unidades', 352],
                                ['Cadastrados', {{$totalUnidade}}],
                            
                            ]);

                            var options = {
                                title: 'Cadastros Realizados',
                                is3D: false,
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                            chart.draw(data, options);
                        }
                    </script>
                    <div id="piechart_3d" style="width: 100%; height: 500px;"></div>
                    <!-- Gráficos fim -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
