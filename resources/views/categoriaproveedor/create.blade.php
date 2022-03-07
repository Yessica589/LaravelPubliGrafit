@extends('layouts.main', ['activePage' => 'categoriaproveedor', 'titlePage' => 'Nueva Categoría'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('categoriaproveedor.store')}}" method="post" class="form-horizontal">
                   @csrf
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Categoría Proveedor</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombrecategoria" class="col-sm-2 col-form-label">Nombre Categoría</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombrecategoria" placeholder="Ingrese el nombre de la categoría " value="{{ old('nombrecategoria')}}" autofocus>
                                    @if($errors-> has ('nombrecategoria'))
                                    <span class="error text-danger" for="input-nombrecategoria">{{ $errors->first('nombrecategoria')}}</span>
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