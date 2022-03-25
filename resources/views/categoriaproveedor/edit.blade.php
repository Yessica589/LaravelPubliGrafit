@extends('layouts.main', ['activePage' => 'categoriaproveedor', 'titlePage' => 'Editar categoría'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('categoriaproveedor.update', $categoriaproveedor->id)}}" method="post" class="form-horizontal">
                   @csrf
                   @method('PUT')
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Categoría Proveedor</h4>
                            <p class="card-category">Editar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombrecategoria" class="col-sm-2 col-form-label">Nombre de la categoría</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="nombrecategoria" value="{{ $categoriaproveedor->nombrecategoria}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="estado" value="{{ $categoriaproveedor->estado}}" autofocus>
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