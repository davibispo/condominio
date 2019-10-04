@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PORTARIA - GERENCIAMENTO</div>

                <div class="card-body">
                    <form>
                        <input class="form-control" id="myInput" type="text" placeholder="Filtrar..">
                        <div class="container" style="overflow:auto; height: 110px;">
                            <table class="table table-sm" style="font-size:12px">
                                
                                @foreach ($moradores as $m)
                                <tbody id="myTable">
                                    <tr>
                                        <td> {{$m->bloco}}-{{$m->apto}} </td>
                                        <td> {{$m->name}} </td>
                                        <td> {{$m->tel1}} </td>
                                        <td> {{$m->tel2}} </td>
                                        <td> <input type="radio" name="user_id"> </td>
                                    </tr>    
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <br>

                        <div class="input-group mb-3 input-group-lg">
                            <input type="text" class="form-control" placeholder="Nome do visitante" autofocus>
                            <input type="text" class="form-control" placeholder="CPF ou RG" autofocus>
                        </div>

                        <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tipo</span>
                            </div>
                            <select name="tipo" id="" class="form-control">
                                <option value="">1. Entregador</option>
                                <option value="">2. Parente</option>
                                <option value="">3. Amigo</option>
                                <option value="">4. Outro</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection