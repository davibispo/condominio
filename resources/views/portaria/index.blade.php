@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PORTARIA - GERENCIAMENTO</div>

                <div class="card-body">
                    <form>
                        <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Visitante</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nome" autofocus>
                            <input type="text" class="form-control" placeholder="CPF ou RG" autofocus>
                        </div>

                        <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tipo</span>
                            </div>
                            <select name="tipo" id="" class="form-control">
                                <option value="">1. Outro</option>
                                <option value="">2. Parente</option>
                                <option value="">3. Amigo</option>
                                <option value="">4. Entregador</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection