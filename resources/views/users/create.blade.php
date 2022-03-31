@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.store')}}" method="post" class="form-horizontal">
                   @csrf
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <!-- @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif -->
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre " value="{{ old('name')}}" autofocus>
                                   @if($errors-> has ('name'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('name')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="apellido" placeholder="Ingrese el Apellido " value="{{ old('apellido')}}" autofocus>
                                   @if($errors-> has ('apellido'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('apellido')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label ">Nombre de usuario</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control " name="username" placeholder="Ingrese el nombre de usuario" value="{{ old('username')}}"  >
                                   @if($errors-> has ('username'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('username')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="tipodocumento" class="col-sm-2 col-form-label">Tipo de Documento</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="tipodocumento" placeholder="Ingrese el tipo de documento" value="{{ old('tipodocumento')}}" autofocus>
                                   @if($errors-> has ('tipodocumento'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('tipodocumento')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="ndocumento" class="col-sm-2 col-form-label">Número de Documento</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="ndocumento" placeholder="Ingrese el número de documento " value="{{ old('ndocumento')}}" autofocus>
                                   @if($errors-> has ('ndocumento'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('ndocumento')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="telefono" class="col-sm-2 col-form-label">Télefono</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="telefono" placeholder="Ingrese el télefono" value="{{ old('telefono')}}" autofocus>
                                   @if($errors-> has ('telefono'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('telefono')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="celular" placeholder="Ingrese número de celular " value="{{ old('celular')}}" autofocus>
                                   @if($errors-> has ('celular'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('celular')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="direccion" class="col-sm-2 col-form-label">Dirección Residencia</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="direccion" placeholder="Ingrese la dirección de residencia " value="{{ old('direccion')}}" autofocus>
                                   @if($errors-> has ('direccion'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('direccion')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="fechanacimiento" class="col-sm-2 col-form-label">Fecha Nacimiento</label>
                                <div class="col-sm-7">
                                   <input type="date" class="form-control" name="fechanacimiento" placeholder="Ingrese la fecha de nacimiento " value="{{ old('fechanacimiento')}}" autofocus>
                                   @if($errors-> has ('fechanacimiento'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('fechanacimiento')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electronico" value="{{ old('email')}}">
                                    @if($errors-> has ('email'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('email')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                   <input type="password" class="form-control" name="password" placeholder="Contraseña" >
                            </div>
                            
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-danger">Guardar</button>
                    </div>
                    <!--End footer-->
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection