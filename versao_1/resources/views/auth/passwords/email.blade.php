@extends('layouts.app')

@section('content')

<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}
    <div class="header-login">
        <div class="title"><img src="{{ img( !session('status') ? 'close-envelope.svg' : 'checked.svg') }}"/></div>

        @if (!session('status'))
            <div class="txt">
                <h3>Esqueceu sua senha?</h3><br>
                Sem problemas, digite seu email para cadastrar uma nova senha.
            </div>
        @else
            <div class="txt">
                {{ session('status') }}
            </div>
        @endif

        <input id="email" class="campo_nome" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required autofocus>

        <div class="cont-esqueci-senha">
            <a  href="{{ route('login') }}" class="esqueci-senha">Voltar</a>
        </div>
    </div>
    <div class="msg-login {{ $errors->has('email') ? 'open' : '' }}">
        <div class="msg-login-txt">{{ $errors->first('email') }}</div>
    </div>
    <button type="submit" class="bottom-login grow">ENVIAR</button>
</form>


@endsection
