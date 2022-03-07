@extends('layouts.main', ['activePage' => 'controlinsumo', 'titlePage' => 'Nuevo insumo'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('controlinsumo.store')}}" method="post" class="form-horizontal">
                   @csrf
                   <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Control insumo</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombreinsumo" class="col-sm-2 col-form-label">Nombre insumo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombreinsumo" placeholder="Ingrese el nombre del insumo " value="{{ old('nombreinsumo')}}" autofocus>
                                    @if($errors-> has ('nombreinsumo'))
                                    <span class="error text-danger" for="input-nombreinsumo">{{ $errors->first('nombreinsumo')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="cantidadinsumo" class="col-sm-2 col-form-label">Cantidad de insumos</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="cantidadinsumo" placeholder="Ingrese la cantidad de los insumos " value="{{ old('cantidadinsumo')}}" autofocus>
                                    @if($errors-> has ('cantidadinsumo'))
                                    <span class="error text-danger" for="input-cantidadinsumo">{{ $errors->first('cantidadinsumo')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="precioinsumo" class="col-sm-2 col-form-label">Precio del insumo</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="precioinsumo" placeholder="Ingrese el precio del insumo " value="{{ old('precioinsumo')}}" autofocus>
                                    @if($errors-> has ('precioinsumo'))
                                    <span class="error text-danger" for="input-precioinsumo">{{ $errors->first('precioinsumo')}}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="estado" placeholder="Ingrese el estado del insumo " value="{{ old('estado')}}" autofocus>
                                    @if($errors-> has ('estado'))
                                    <span class="error text-danger" for="input-estado">{{ $errors->first('estado')}}</span>
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