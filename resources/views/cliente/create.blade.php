@extends('layouts.main', ['activePage' => 'cliente', 'titlePage' => 'Nuevo cliente'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('cliente.store')}}" method="post" class="form-horizontal">
                   @csrf
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Cliente</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombrecompleto" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombrecompleto" placeholder="Ingrese el nombre completo del cliente" value="{{ old('nombrecompleto')}}" autofocus>
                                    @if($errors-> has ('nombrecompleto'))
                                    <span class="error text-danger" for="input-nombrecompleto">{{ $errors->first('nombrecompleto')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="telefono" placeholder="Ingrese el número de teléfono del cliente " value="{{ old('telefono')}}" autofocus>
                                    @if($errors-> has ('nombrecategoria'))
                                    <span class="error text-danger" for="input-telefono">{{ $errors->first('telefono')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="celular" class="col-sm-2 col-form-label"> Celular</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="celular" placeholder="Ingrese el número de celular del cliente" value="{{ old('celular')}}" autofocus>
                                    @if($errors-> has ('celular'))
                                    <span class="error text-danger" for="input-celular">{{ $errors->first('celular')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese el e-mail del cliente" value="{{ old('email')}}" autofocus>
                                    @if($errors-> has ('email'))
                                    <span class="error text-danger" for="input-email">{{ $errors->first('email')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="direccion" class="col-sm-2 col-form-label">Dirección de residencia</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="direccion" placeholder="Ingrese la dirección de residencia del cliente " value="{{ old('direccion')}}" autofocus>
                                    @if($errors-> has ('direccion'))
                                    <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion')}}</span>
                                     @endif
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