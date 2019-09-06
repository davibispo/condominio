@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Solicitar Reserva de Local</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'ReservaController@store', 'class'=>'form-horizontal']) !!}

                    <div class="form-group row">
                        {!! Form::label('area_locavel_id', 'Selecione um local para reserva', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <div class="col-md-5">
                            <select name="area_locavel_id" id="" class="form-control">
                                <option value=""></option>
                                @foreach ($areas as $item)
                                    <option value="{{ $item->id }}">{{ $item->descricao }} - R$ {{ $item->valor }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('data_solicitada', 'Data solicitada', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <div class="col-md-5">
                            {!! Form::date('data_solicitada', null, ['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('hora_inicio', 'Horário', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <div class="col-md-2">
                            {!! Form::select('hora_inicio',
                                [
                                '' => 'de',
                                '08:00' => '08:00',
                                '09:00' => '09:00',
                                '10:00' => '10:00',
                                '11:00' => '11:00',
                                '12:00' => '12:00',
                                '13:00' => '13:00',
                                '14:00' => '14:00',
                                '15:00' => '15:00',
                                '16:00' => '16:00',
                                '17:00' => '17:00',
                                '18:00' => '18:00',
                                '19:00' => '19:00',
                                '20:00' => '20:00',
                                '21:00' => '21:00',
                                '22:00' => '22:00',
                                ]

                            , null, ['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="col-md-2">
                            {!! Form::select('hora_fim',
                                [
                                '' => 'até',
                                '08:00' => '08:00',
                                '09:00' => '09:00',
                                '10:00' => '10:00',
                                '11:00' => '11:00',
                                '12:00' => '12:00',
                                '13:00' => '13:00',
                                '14:00' => '14:00',
                                '15:00' => '15:00',
                                '16:00' => '16:00',
                                '17:00' => '17:00',
                                '18:00' => '18:00',
                                '19:00' => '19:00',
                                '20:00' => '20:00',
                                '21:00' => '21:00',
                                '22:00' => '22:00',
                                ]

                            , null, ['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('obs', 'Observação', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <div class="col-md-5">
                            <textarea class="form-control" name="obs"></textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            {!! Form::submit('Enviar solicitação', ['class'=>'btn btn-dark btn-sm']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <br><br>
                    <div class="container">
                    <table class="table table-sm table-hover">
                        <tr>
                            <th>Data Solicitada</th>
                            <th>Área</th>
                            <th>Horário</th>
                            <th>Solicitado em</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($reservas as $item)
                            @foreach ($areas as $a)
                                @if ($item->user_id == auth()->user()->id)
                                    @if ($item->area_locavel_id == $a->id)
                                    <tr>
                                        <td>{{ date('d-m-Y', strtotime($item->data_solicitada)) }}</td>
                                        <td>{{ $a->descricao }}</td>
                                        <td>De {{ $item->hora_inicio }} às {{ $item->hora_fim }}</td>
                                        <td> {{ date('d-m-Y', strtotime($item->created_at)) }} </td>
                                        <td>  </td>
                                    </tr>
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
