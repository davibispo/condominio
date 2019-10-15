@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Gerenciamento de Recursos - Unidades</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 500px;">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <td> 
                                    @for ($i = 1; $i < 17; $i++) 
                                        @for ($j = 001; $j < 005; $j++)
                                            <ul>
                                                <li style="list-style:none"> 
                                                    {{ $i }}-00{{ $j }} 
                                                
                                                    @foreach ($users as $u)
                                                        @if ($u->bloco == $i && $u->apto == $j)
                                                            <i class="fas fa-user" style="color:blue"></i>
                                                        @endif
                                                    @endforeach
                                                </li>
                                            </ul>
                                        @endfor
                                    @endfor
                                </td>
                                <td> 
                                    @for ($i = 1; $i < 17; $i++) 
                                        @for ($j = 101; $j < 105; $j++)
                                            <ul>
                                                <li style="list-style:none"> 
                                                    {{ $i }}-{{ $j }} 

                                                    @foreach ($users as $u)
                                                        @if ($u->bloco == $i && $u->apto == $j)
                                                            <i class="fas fa-user" style="color:blue"></i>
                                                        @endif
                                                    @endforeach
                                                </li>
                                            </ul>
                                        @endfor
                                    @endfor
                                </td>
                                <td> 
                                    @for ($i = 1; $i < 17; $i++) 
                                        @for ($j = 201; $j < 205; $j++)
                                            <ul>
                                                <li style="list-style:none"> 
                                                    {{ $i }}-{{ $j }} 
                                                    
                                                    @foreach ($users as $u)
                                                        @if ($u->bloco == $i && $u->apto == $j)
                                                            <i class="fas fa-user" style="color:blue"></i>
                                                        @endif
                                                    @endforeach
                                                </li>
                                            </ul>
                                        @endfor
                                    @endfor
                                </td>
                                <td> 
                                    @for ($i = 1; $i < 17; $i++) 
                                        @for ($j = 301; $j < 305; $j++)
                                            <ul>
                                                <li style="list-style:none"> 
                                                    {{ $i }}-{{ $j }} 
                                                
                                                    @foreach ($users as $u)
                                                        @if ($u->bloco == $i && $u->apto == $j)
                                                            <i class="fas fa-user" style="color:blue"></i>
                                                        @endif
                                                    @endforeach
                                                </li>
                                            </ul>
                                        @endfor
                                    @endfor
                                </td>
                            </tr>
                        </tbody>
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
