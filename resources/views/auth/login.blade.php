@extends('auth.contenido')

@section('login')
    <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(public/img/pico.jpg);">
            <span class="login100-form-title-1">
                CEOP 
            </span>
        </div>

        <form class="login100-form  was-validated" action="{{ route('login')}}" method="POST">
        {{ csrf_field() }}
            <div class="wrap-input100  m-b-26 {{$errors->has('usuario' ? 'is-invalid' : '')}}" data-validate="Usuario requerido">
                <span class="label-input100">Usuario</span>
                <input class="input100  " type="text" id="usuario" name="usuario" value="{{ old('usuario')}}" placeholder="Ingrese usuario">
            </div>
                {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}

            <div class="wrap-input100  m-b-18 {{$errors->has('password' ? 'is-invalid' : '')}}" data-validate = "Contraseña requerida">
                <span class="label-input100">Contraseña</span>
                <input class="input100" type="password" id="password" name="password" placeholder="Ingrese contraseña">
            </div>
                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}

            <div class="flex-sb-m w-full p-b-30">
                <!-- <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Recordar
                    </label>
                </div>

                <div>
                    <a href="#" class="txt1">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div> -->
            </div>
            {!! session()->get('error') !!}
            <div class="container-login100-form-btn">
                <button class="login100-form-btn" >
                    iniciar sesión
                </button>
            </div>
        </form>
    </div>
@endsection