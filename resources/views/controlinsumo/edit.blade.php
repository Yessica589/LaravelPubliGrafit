@extends('layouts.main', ['activePage' => 'controlinsumo', 'titlePage' => 'Editar insumo'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('controlinsumo.update', $controlinsumo->id)}}" method="post" class="form-horizontal">
                   @csrf
                   @method('PUT')
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Control insumo</h4>
                            <p class="card-category">Editar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombreinsumo" class="col-sm-2 col-form-label">Nombre del insumo</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="nombreinsumo" value="{{ $controlinsumo->nombreinsumo}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="cantidadinsumo" class="col-sm-2 col-form-label">Cantidad de insumos</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="cantidadinsumo" value="{{ $controlinsumo->cantidadinsumo}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="precioinsumo" class="col-sm-2 col-form-label">Precio del insumo</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="precioinsumo" value="{{ $controlinsumo->precioinsumo}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="estado" value="{{ $controlinsumo->estado}}" autofocus>
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