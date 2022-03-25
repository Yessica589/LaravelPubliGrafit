@extends('layouts.main', ['activePage' => 'productoterminado', 'titlePage' => 'Editar producto'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('productoterminado.update', $productoterminado->id)}}" method="post" class="form-horizontal">
                   @csrf
                   @method('PUT')
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Control Producto Terminado</h4>
                            <p class="card-category">Editar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombreproducto" class="col-sm-2 col-form-label">Nombre del producto</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="nombreproducto" value="{{ $productoterminado->nombreproducto}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="cantidadproducto" class="col-sm-2 col-form-label">Cantidad de productos</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="cantidadproducto" value="{{ $productoterminado->cantidadproducto}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="precioproducto" class="col-sm-2 col-form-label">Precio del producto</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="precioproducto" value="{{ $productoterminado->precioproducto}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="estado" value="{{ $productoterminado->estado}}" autofocus>
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