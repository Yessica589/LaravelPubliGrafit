@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.update', $user->id)}}" method="post" class="form-horizontal">
                   @csrf
                   @method('PUT')
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Editar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="name" value="{{ $user->name}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label ">Nombre de usuario</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control " name="username" value="{{ $user->username}}" >
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" value="{{ $user->email}}"  >
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                   <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña solo en caso de modificarla" >
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="estado" value="{{ $user->estado}}" autofocus>
                                </div>
                            </div>
                        </div>
                         <!--Footer-->
                         <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-danger">Actualizar</button>
                        </div>
                         <!--End footer-->
                    </div>
                    

                </form>
            </div>
        </div>
    </div>
</div>
@endsection