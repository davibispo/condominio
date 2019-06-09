@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cartão de Vacina do Pet</div>

                <div class="card-body">
                    <iframe src="{{url("storage/{$pet->vacina}")}}" width="600" height="780" style="border: none;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
