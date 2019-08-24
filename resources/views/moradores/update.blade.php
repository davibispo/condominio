@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Atualizar Cadastro') }}</div>

                <div class="card-body">
                    {!! Form::model($user,['method'=>'PATCH', 'action'=>['MoradorController@update', $user->id], 'class'=>'form-horizontal']) !!}
                        
                        <div class="form-group row">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Morador tipo') }}</label>

                            <div class="col-md-6">
                                    {!! Form::select('tipo', 
                                        [
                                            'Proprietário'      => 'Proprietário (Responsável)', 
                                            'Inquilino'         => 'Inquilino (Responsável)', 
                                            'Apenas Morador'    => 'Apenas Morador', 
                                            'Outro'             => 'Outro', 
                                        ], 
                                        null, ['class' => 'form-control', 'required', 'placeholder' => '-- Escolha --']) 
                                    !!}                                 
                              </div>
                        </div>

                        <div class="form-group row">
                            <label for="unidade" class="col-md-4 col-form-label text-md-right">{{ __('Unidade') }}</label>

                            <div class="col-md-6">
                                {!! Form::select('bloco',
                                    [
                                    '1'=>'1',   
                                    '2'=>'2',   
                                    '3'=>'3',   
                                    '4'=>'4',   
                                    '5'=>'5',   
                                    '6'=>'6',   
                                    '7'=>'7',   
                                    '8'=>'8',   
                                    '9'=>'9',   
                                    '10'=>'10',   
                                    '11'=>'11',   
                                    '12'=>'12',   
                                    '13'=>'13',   
                                    '14'=>'14',   
                                    '15'=>'15',   
                                    '16'=>'16',   
                                    '17'=>'17',   
                                    '18'=>'18',   
                                    '19'=>'19',   
                                    '20'=>'20',   
                                    '21'=>'21',   
                                    '22'=>'22',   
                                    ],
                                    null, ['class' => 'form-control', 'required', 'placeholder' => '-- Bloco --'])     
                                !!}
                                {!! Form::select('apto', 
                                    [
                                    '001'=>'001',
                                    '002'=>'002',
                                    '003'=>'003',
                                    '004'=>'004',
                                    '101'=>'101',
                                    '102'=>'102',
                                    '103'=>'103',
                                    '104'=>'104',
                                    '201'=>'201',
                                    '202'=>'202',
                                    '203'=>'203',
                                    '204'=>'204',
                                    '301'=>'301',
                                    '302'=>'302',
                                    '303'=>'303',
                                    '304'=>'304',
                                    's/u'=>'s/u',
                                    ],
                                    null, ['class' => 'form-control', 'required', 'placeholder' => '-- Apartamento --']) 
                                !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome completo') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel1" class="col-md-4 col-form-label text-md-right">{{ __('Telefones') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('tel1', null, ['class' => 'form-control', 'required']) !!}
                                {!! Form::text('tel2', null, ['class' => 'form-control']) !!}                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('cpf', null, ['class' => 'form-control', 'required']) !!}    
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                            <div class="col-md-6">
                                {!! Form::select('sexo', 
                                    [
                                    'F'=>'Feminino',
                                    'M'=>'Masculino',
                                    ],
                                    null, ['class' => 'form-control', 'required']) 
                                !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data de nascimento') }}</label>

                            <div class="col-md-6">
                                {!! Form::date('data_nascimento', null, ['class' => 'form-control', 'required']) !!}  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                {!! Form::file('foto', null, ['class' => 'form-control']) !!}  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="residente1" class="col-md-4 col-form-label text-md-right">{{ __('Residente com') }}</label>

                            <div class="col-md-6">
                                <table class="table table-sm">
                                    <tr>
                                        <td>{!! Form::text('residente1', null, ['class' => 'form-control']) !!} </td>
                                        <td>{!! Form::number('idade_residente1', null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('residente2', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::number('idade_residente2', null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('residente3', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::number('idade_residente3', null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('residente4', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::number('idade_residente4', null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                    <tr>
                                        <td>{!! Form::text('residente5', null, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::number('idade_residente5', null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                </table>
                                <hr>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Atualizar') }}
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
