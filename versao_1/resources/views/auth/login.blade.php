@extends('layouts.app')


@section('content')

<form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="header-login">
        <div class="title"><img src="{{ img('user.svg') }}"/></div>
        <input id="email" class="campo_nome" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        <input id="password" class="campo_senha" type="password" placeholder="Senha" class="form-control" name="password" required>
        <div class="cont-esqueci-senha">
            <a  href="{{ route('password.request') }}" class="esqueci-senha">Esqueci minha senha</a>
        </div>
    </div>
    <div class="msg-login {{ $errors->has('email') ? 'open' : '' }}">
        <div class="msg-login-txt">Login e/ou senha inválido</div>
    </div>
    <button type="submit" class="bottom-login grow">LOGIN</button>
</form>

@endsection