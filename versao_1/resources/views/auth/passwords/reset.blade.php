@extends('layouts.app')

@section('content')
<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="header-login">
        <div class="title"><img src="{{ img('003-lock.svg') }}"/></div>
        <div class="txt">Preencha os campos para cadastrar uma nova senha.</div>
        <input id="email" type="email" class="campo_nome" placeholder="Email" name="email" value="{{ $email or old('email') }}" required autofocus>
        <input id="password" class="campo_senha" type="password" placeholder="Senha" name="password" required>
        <input id="password-confirm" type="password" class="campo_senha" placeholder="Confirme a senha" name="password_confirmation" required>
        <div class="cont-esqueci-senha">
            <a  href="{{ route('login') }}" class="esqueci-senha">voltar</a>
        </div>
    </div>
    <div class="msg-login {{ $errors->has('email') ? 'open' : '' }}">
        <div class="msg-login-txt">{{ $errors->first('email') }}</div>
    </div>
    <div class="msg-login {{ $errors->has('password') ? 'open' : '' }}">
        <div class="msg-login-txt">{{ $errors->first('password') }}</div>
    </div>
    <div class="msg-login {{ $errors->has('password_confirmation') ? 'open' : '' }}">
        <div class="msg-login-txt">{{ $errors->first('password_confirmation') }}</div>
    </div>
    <button type="submit" class="bottom-login grow">SALVAR</button>
</form>
@endsection
