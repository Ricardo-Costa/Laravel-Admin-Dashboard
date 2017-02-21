@extends('layouts.login')

@section('content')
    <div id="container" class="container"><!-- .container -->
        <div class="row"> <!-- .row 1 -->
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h1 id="title-v1" class="component-inline" title="{{ config('app.name') }}">
                            {{ config('app.name') }}
                        </h1>

                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" data-toggle="validator" role="form" method="POST" action="{{ url('/login') }}">

                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail / Login</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" maxlength="{{ config('rules.email-maxlength') }}" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block with-errors">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @else
                                        <span class="help-block with-errors"></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" data-error="Mínimo {{ config('rules.password-minlength') }} caracteres." data-minlength="{{ config('rules.password-minlength') }}" maxlength="{{ config('rules.password-maxlength') }}" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block with-errors">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @else
                                        <span class="help-block with-errors"></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <label for="remember">
                                        <input id="remember" type="checkbox" name="remember"  value="checkone" {{ old('remember') ? 'checked' : ''}}/>
                                        <i></i> <span>Manter conectado</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-default">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Esqueceu a senha?
                                    </a>
                                </div>
                            </div>
                        </form>

                        <hr/>

                        <blockquote>
                            <p id="phrase">A mente que se abre a uma nova ideia jamais voltará ao seu tamanho original.</p>
                            <footer class="pull-right">Albert Einstein</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div> <!-- fim .row 1 -->
    </div> <!-- fim div .container -->
@endsection
