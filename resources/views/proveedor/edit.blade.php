@extends('layouts.main', ['activePage' => 'proveedor', 'titlePage' => 'Editar proveedor'])
@section('content')
<div class="content">
    <div class="container-fluid">
    <!--Inicio Repositorio-->
        <div class="row">
            <div class="col-md-12">
                    @foreach ($proveedores as $proveedor)
                <form action="{{ route('proveedor.update', $proveedor->id)}}" method="post" class="form-horizontal">
                   @csrf
                   @method('PUT')
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Proveedor</h4>
                            <p class="card-category">Editar Datos</p>
                        </div>
                                                  
                        
                        <div class="card-body">
                             <div class="row">
                                <label for="nombreproveedor" class="col-sm-2 col-form-label">Nombre Proveedor</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="nombreproveedor" value="{{ $proveedor->nombreproveedor}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nombreempresa" class="col-sm-2 col-form-label">Nombre Empresa</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="nombreempresa" value="{{ $proveedor->nombreempresa}}" autofocus>
                                </div>
                            </div>
                           <div class="row">
                                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="telefono" value="{{ $proveedor->telefono}}" autofocus>
                                </div>
                            </div>
                           <div class="row">
                                <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-7">
                                   <input type="number" class="form-control" name="celular" value="{{ $proveedor->celular}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-7">
                                   <input type="email" class="form-control" name="email" value="{{ $proveedor->email}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                                <div class="col-sm-7">
                                   <input type="text" class="form-control" name="direccion" value="{{ $proveedor->direccion}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="direccion" class="col-sm-2 col-form-label">Categoría</label>
                                <div class="col-sm-7">
                                        <select class="form-control" name="idcategoria" id=""> 
                                            <option value="">Seleccione la categoría del proveedor</option>
                                            <option value="{{ $proveedor->idcategoria}}">{{ $proveedor->nombrecategoria}}</option>
                                            @foreach($categoriaproveedores as $key =>$value)
                                                <option value="{{$value->id}}">{{$value->nombrecategoria}}</option>
                                            @endforeach
                                        </select>                                     
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="estado" value="{{ $proveedor->estado}}" autofocus>
                                </div>
                            </div>
                            @endforeach  
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







































