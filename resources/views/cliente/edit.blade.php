@extends('layouts.main', ['activePage' => 'cliente', 'titlePage' => 'Editar cliente'])
@section('content')
<div class="content">
    <div class="container-fluid">
    <!--Inicio-->
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('cliente.update', $cliente->id)}}" method="post" class="form-horizontal">
                   @csrf
                   @method('PUT')
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Cliente</h4>
                            <p class="card-category">Editar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombrecompleto" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="nombrecompleto" value="{{ $cliente->nombrecompleto}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="telefono" value="{{ $cliente->telefono}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="celular" value="{{ $cliente->celular}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-7">
                                   <input type="email" class="form-control" name="email" value="{{ $cliente->email}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="direccion" class="col-sm-2 col-form-label">Dirección de residencia</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="direccion" value="{{ $cliente->direccion}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="estado" value="{{ $cliente->estado}}" autofocus>
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