@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-weight:bold">Cartão de Vacina do Pet</div>

                <div class="card-body">
                    <iframe src="{{asset('storage/'. $pet->vacina)}}" width="700" height="780" style="border: none;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
