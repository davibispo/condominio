@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalhes de Morador</div>

                <div class="card-body">
                    <div class="container" style="overflow:auto; height: 400px;">
                        
                        <table class="table table-sm table-hover" style="font-size:10px">
                            <tr>
                                <td>
                                    {{$morador->name}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
