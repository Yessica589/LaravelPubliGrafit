@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __(' PubliGrafit')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-success text-center">
            <h4 class="card-title"><strong>{{ __('Registarse') }}</strong></h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body ">
            <p class="card-description text-center">{{ __('Ingresar datos') }}</p>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Nombre...') }}" value="{{ old('name') }}" required autocomplete="name" autofocus>
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('apellido') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="apellido" class="form-control" placeholder="{{ __('Apellido...') }}" value="{{ old('apellido') }}" required autocomplete="apellido" >
              </div>
              @if ($errors->has('apellido'))
                <div id="apellido-error" class="error text-danger pl-3" for="apellido" style="display: block;">
                  <strong>{{ $errors->first('apellido') }}</strong>
                </div>
              @endif
            </div>
            <!--username-->
            <div class="bmd-form-group{{ $errors->has('username') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">fingerprint</i>
                  </span>
                </div>
                <input type="text" name="username" class="form-control" placeholder="{{ __('Nombre de Usuario...') }}" value="{{ old('username') }}" required autocomplete="username" >
              </div>
              @if ($errors->has('username'))
                <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                  <strong>{{ $errors->first('username') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('tipodocumento') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">account_box</i>
                  </span>
                </div>
                <input type="text" name="tipodocumento" class="form-control" placeholder="{{ __('Tipo Documento...') }}" value="{{ old('tipodocumento') }}" required autocomplete="tipodocumento" >
              </div>
              @if ($errors->has('tipodocumento'))
                <div id="tipodocumento-error" class="error text-danger pl-3" for="tipodocumento" style="display: block;">
                  <strong>{{ $errors->first('tipodocumento') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('ndocumento') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">numbers</i>
                  </span>
                </div>
                <input type="text" name="ndocumento" class="form-control" placeholder="{{ __('Número de Documento...') }}" value="{{ old('ndocumento') }}" required autocomplete="ndocumento" >
              </div>
              @if ($errors->has('ndocumento'))
                <div id="ndocumento-error" class="error text-danger pl-3" for="ndocumento" style="display: block;">
                  <strong>{{ $errors->first('ndocumento') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('telefono') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">add_ic_call</i>
                  </span>
                </div>
                <input type="text" name="telefono" class="form-control" placeholder="{{ __('Télefono...') }}" value="{{ old('telefono') }}" required autocomplete="telefono" >
              </div>
              @if ($errors->has('telefono'))
                <div id="telefono-error" class="error text-danger pl-3" for="telefono" style="display: block;">
                  <strong>{{ $errors->first('telefono') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('celular') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">remember_me</i>
                  </span>
                </div>
                <input type="text" name="celular" class="form-control" placeholder="{{ __('Celular...') }}" value="{{ old('celular') }}" required autocomplete="celular" >
              </div>
              @if ($errors->has('celular'))
                <div id="celular-error" class="error text-danger pl-3" for="celular" style="display: block;">
                  <strong>{{ $errors->first('celular') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('E-mail...') }}" value="{{ old('email') }}" required autocomplete="email" >
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}" required autocomplete="new-password">
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Contraseña...') }}" required autocomplete="new-password">
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('direccion') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">location_on</i>
                  </span>
                </div>
                <input type="text" name="direccion" class="form-control" placeholder="{{ __('Dirección de Residencia...') }}" value="{{ old('direccion') }}" required autocomplete="direccion" >
              </div>
              @if ($errors->has('direccion'))
                <div id="direccion-error" class="error text-danger pl-3" for="direccion" style="display: block;">
                  <strong>{{ $errors->first('direccion') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('fechanacimiento') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">today</i>
                  </span>
                </div>
                <input type="date" name="fechanacimiento" class="form-control" placeholder="{{ __('Fecha de Nacimiento...') }}" value="{{ old('fechanacimiento') }}" required autocomplete="fechanacimiento" >
              </div>
              @if ($errors->has('fechanacimiento'))
                <div id="fechanacimiento-error" class="error text-danger pl-3" for="fechanacimiento" style="display: block;">
                  <strong>{{ $errors->first('fechanacimiento') }}</strong>
                </div>
              @endif
            </div>
            <!-- <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
              </label>
            </div> -->
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Crear cuenta') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
