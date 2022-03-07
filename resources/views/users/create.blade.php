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
                                   <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre " value="{{ old('name')}}" autofocus>
                                   @if($errors-> has ('name'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('name')}}</span>
                                   @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label ">Nombre de usuario</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control " name="username" placeholder="Ingrese su nombre de usuario" value="{{ old('username')}}"  >
                                   @if($errors-> has ('username'))
                                   <span class="error text-danger" for="input-name">{{ $errors->first('username')}}</span>
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