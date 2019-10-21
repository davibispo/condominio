@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-weight:bold">Gerenciamento de Recursos</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <td><i class="fas fa-users"></i></td>
                            <td><a class="dropdown-item" href="{{ route('moradores.index') }}">Moradores</a></td>
                            <td>{{ $totalMoradores }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-building"></i></td>
                            <td><a class="dropdown-item" href="{{ route('adm.unidades') }}">Unidades</a></td>
                            <td>{{ $totalUnidades }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-book"></i></td>
                            <td><a class="dropdown-item" href="{{ route('ocorrencias.index') }}">Ocorrências</a></td>
                            <td>{{ $totalOcorrencias }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-door-open"></i></td>
                            <td><a class="dropdown-item" href="{{ route('portaria.index') }}">Portaria</a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-folder-open"></i></td>
                            <td><a class="dropdown-item" href="{{ route('files.create') }}">Arquivos</a></td>
                            <td>{{ $totalFiles }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-home"></i></td>
                            <td><a class="dropdown-item" href="{{ route('locavel-areas.create') }}">Locais</a></td>
                            <td>{{ $totalLocais }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-calendar-day"></i></td>
                            <td><a class="dropdown-item" href="{{ route('reservas.index') }}">Reservas</a></td>
                            <td>{{ $totalReservas }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-car"></i></td>
                            <td><a class="dropdown-item" href="{{ route('veiculos.index') }}">Veículos</a></td>
                            <td>{{ $totalVeiculos }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-cat"></i></td>
                            <td><a class="dropdown-item" href="{{ route('pets.index') }}">Animais</a></td>
                            <td>{{ $totalPets }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-lock"></i></td>
                            <td><a class="dropdown-item" href="{{ route('adm.permissoes') }}">Acesso</a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table> 

                    <div class="container" style="float:right">
                        <!-- Gráficos inicio -->
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load("current", {packages:["corechart"]});
                            google.charts.setOnLoadCallback(drawChart);
                            
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ['Unidades', 352],
                                    ['Cadastradas', {{$totalUnidades}}],
                                ]);

                                var options = {
                                    title: 'Cadastros Realizados',
                                    is3D: true,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                chart.draw(data, options);
                            }
                        </script>
                        <div id="piechart_3d" style="width: 100%; height: 500px;"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
