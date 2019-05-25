@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" placeholder="Ex.: 000.000.000-00" class="form-control cpf-mask @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data nascimento') }}</label>

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
                            <label for="residente1" class="col-md-4 col-form-label text-md-right">{{ __('Residentes') }}</label>

                            <div class="col-md-6">
                                <table class="table">
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
                                    <tr>
                                        <td><input id="residente6" type="text" class="form-control @error('residente6') is-invalid @enderror" name="residente6" value="{{ old('residente6') }}" autocomplete="residente6" autofocus placeholder="Nome"></td>
                                        <td><input id="idade_residente6" type="number" min="0" max="110" class="form-control @error('idade_residente6') is-invalid @enderror" name="idade_residente6" value="{{ old('idade_residente6') }}" autocomplete="idade_residente6" autofocus placeholder="Idade"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="residente7" type="text" class="form-control @error('residente7') is-invalid @enderror" name="residente7" value="{{ old('residente7') }}" autocomplete="residente7" autofocus placeholder="Nome"></td>
                                        <td><input id="idade_residente7" type="number" min="0" max="110" class="form-control @error('idade_residente7') is-invalid @enderror" name="idade_residente7" value="{{ old('idade_residente7') }}" autocomplete="idade_residente7" autofocus placeholder="Idade"></td>
                                    </tr>
                                    <tr>
                                        <td><input id="residente8" type="text" class="form-control @error('residente8') is-invalid @enderror" name="residente8" value="{{ old('residente8') }}" autocomplete="residente8" autofocus placeholder="Nome"></td>
                                        <td><input id="idade_residente8" type="number" min="0" max="110" class="form-control @error('idade_residente8') is-invalid @enderror" name="idade_residente8" value="{{ old('idade_residente8') }}" autocomplete="idade_residente8" autofocus placeholder="Idade"></td>
                                    </tr>
                                </table>
                                <hr>
                                @error('residente1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
