@extends('layouts.main', ['activePage' => 'productoterminado', 'titlePage' => 'Nuevo producto'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('productoterminado.store')}}" method="post" class="form-horizontal">
                   @csrf
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Control Producto Terminado</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombreproducto" class="col-sm-2 col-form-label">Nombre Producto</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombreproducto" placeholder="Ingrese el nombre del producto" value="{{ old('nombreproducto')}}" autofocus>
                                    @if($errors-> has ('nombreproducto'))
                                    <span class="error text-danger" for="input-nombreproducto">{{ $errors->first('nombreproducto')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="cantidadproducto" class="col-sm-2 col-form-label">Cantidad de Producto</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="cantidadproducto" placeholder="Ingrese la cantidad de los productos " value="{{ old('cantidadproducto')}}" autofocus>
                                    @if($errors-> has ('cantidadproducto'))
                                    <span class="error text-danger" for="input-cantidadproducto">{{ $errors->first('cantidadproducto')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="precioproducto" class="col-sm-2 col-form-label">Precio del Producto</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="precioproducto" placeholder="Ingrese el precio del producto " value="{{ old('precioproducto')}}" autofocus>
                                    @if($errors-> has ('precioproducto'))
                                    <span class="error text-danger" for="input-precioproducto">{{ $errors->first('precioproducto')}}</span>
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