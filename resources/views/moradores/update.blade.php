@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Cadastro') }}</div>

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
                                    
                                
                                @error('tipo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                                @error('apto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="{{}}" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel1" class="col-md-4 col-form-label text-md-right">{{ __('Telefones') }}</label>

                            <div class="col-md-6">
                                <input id="tel1" type="text" class="form-control @error('tel1') is-invalid @enderror" name="tel1" value="{{ old('tel1') }}" placeholder="Ex: 82 98888-8888" required autocomplete="tel1" autofocus>
                                @error('tel1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <input id="tel2" type="text" class="form-control @error('tel2') is-invalid @enderror" name="tel2" value="{{ old('tel2') }}" placeholder="Ex: 82 98888-8888" autocomplete="tel2" autofocus>
                                @error('tel2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" maxlength="11" placeholder="digite apenas números"class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                            <div class="col-md-6">
                                <select id="sexo" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}"  autocomplete="sexo" autofocus>
                                    <option value=""></option>
                                    <option value="F">Feminino</option>
                                    <option value="M">Masculino</option>
                                </select>
                                @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data de nascimento') }}</label>

                            <div class="col-md-6">
                                <input id="data_nascimento" type="date" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{ old('data_nascimento') }}" required autocomplete="data_nascimento" autofocus>

                                @error('data_nascimento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" autocomplete="foto" autofocus>

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="residente1" class="col-md-4 col-form-label text-md-right">{{ __('Residente com') }}</label>

                            <div class="col-md-6">
                                <table class="table table-sm">
                                    <tr>
                                        <td><input id="residente1" type="text" class="form-control @error('residente1') is-invalid @enderror" name="residente1" value="{{ old('residente1') }}" autocomplete="residente1" autofocus placeholder="Nome"></td>
                                        <td><input id="idade_residente1" type="number" min="0" max="110" class="form-control @error('idade_residente1') is-invalid @enderror" name="idade_residente1" value="{{ old('idade_residente1') }}" autocomplete="idade_residente1" autofocus placeholder="Idade"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="residente2" type="text" class="form-control @error('residente2') is-invalid @enderror" name="residente2" value="{{ old('residente2') }}" autocomplete="residente2" autofocus placeholder="Nome"></td>
                                        <td><input id="idade_residente2" type="number" min="0" max="110" class="form-control @error('idade_residente2') is-invalid @enderror" name="idade_residente2" value="{{ old('idade_residente2') }}" autocomplete="idade_residente2" autofocus placeholder="Idade"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="residente3" type="text" class="form-control @error('residente3') is-invalid @enderror" name="residente3" value="{{ old('residente3') }}" autocomplete="residente3" autofocus placeholder="Nome"></td>
                                        <td><input id="idade_residente3" type="number" min="0" max="110" class="form-control @error('idade_residente3') is-invalid @enderror" name="idade_residente3" value="{{ old('idade_residente3') }}" autocomplete="idade_residente3" autofocus placeholder="Idade"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="residente4" type="text" class="form-control @error('residente4') is-invalid @enderror" name="residente4" value="{{ old('residente4') }}" autocomplete="residente4" autofocus placeholder="Nome"></td>
                                        <td><input id="idade_residente4" type="number" min="0" max="110" class="form-control @error('idade_residente4') is-invalid @enderror" name="idade_residente4" value="{{ old('idade_residente4') }}" autocomplete="idade_residente4" autofocus placeholder="Idade"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="residente5" type="text" class="form-control @error('residente5') is-invalid @enderror" name="residente5" value="{{ old('residente5') }}" autocomplete="residente5" autofocus placeholder="Nome"></td>
                                        <td><input id="idade_residente5" type="number" min="0" max="110" class="form-control @error('idade_residente5') is-invalid @enderror" name="idade_residente5" value="{{ old('idade_residente5') }}" autocomplete="idade_residente5" autofocus placeholder="Idade"></td>
                                    </tr>
                                </table>
                                <hr>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
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
