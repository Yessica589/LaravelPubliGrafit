@extends('layouts.main', ['activePage' => 'proveedor', 'titlePage' => 'Nuevo Proveedor'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('proveedor.store')}}" method="post" class="form-horizontal">
                   @csrf
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title"> Proveedor</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombreproveedor" class="col-sm-2 col-form-label">Nombre del Proveedor</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombreproveedor" placeholder="Ingrese el nombre del proveedor " value="{{ old('nombreproveedor')}}" autofocus>
                                    @if($errors-> has ('nombreproveedor'))
                                    <span class="error text-danger" for="input-nombreproveedor">{{ $errors->first('nombreproveedor')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="nombreempresa" class="col-sm-2 col-form-label">Nombre de empresa</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombreempresa" placeholder="Ingrese el nombre de la empresa " value="{{ old('nombreempresa')}}" autofocus>
                                    @if($errors-> has ('nombreempresa'))
                                    <span class="error text-danger" for="input-nombreempresa">{{ $errors->first('nombreempresa')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="telefono" placeholder="Ingrese el número de teléfono del proveedor " value="{{ old('telefono')}}" autofocus>
                                    @if($errors-> has ('telefono'))
                                    <span class="error text-danger" for="input-telefono">{{ $errors->first('telefono')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="celular" placeholder="Ingrese el número de celular del proveedor " value="{{ old('celular')}}" autofocus>
                                    @if($errors-> has ('celular'))
                                    <span class="error text-danger" for="input-celular">{{ $errors->first('celular')}}</span>
                                     @endif
                                </div>
                            </div>
                             <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese el e-mail del proveedor " value="{{ old('email')}}" autofocus>
                                    @if($errors-> has ('email'))
                                    <span class="error text-danger" for="input-email">{{ $errors->first('email')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="direccion" placeholder="Ingrese la dirección del proveedor " value="{{ old('direccion')}}" autofocus>
                                    @if($errors-> has ('direccion'))
                                    <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="idcategoria" class="col-sm-2 col-form-label">Nombre Categoría</label>
                                <div class="col-sm-7">
                                   <select class="form-control" name="idcategoria" id="" > 
                                        <option value="" >Seleccione la categoría del proveedor</option>
                                        @foreach($categoriaproveedores as $key =>$value)
                                            <option value="{{$value->id}}">{{$value->nombrecategoria}}</option>
                                        @endforeach
                                    </select> 
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