@extends('layouts.main', ['activePage'=>'productoterminado','titlePage'=>'Control producto terminado'])
@section('content')
    <div class="content">
        <div class="container-fluit">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Control Producto Terminado</h4>
                                    <p class="card-category">Productos Registrados</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-info" roler="success">
                                            {{ session('success')}}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('productoterminado.create')}}" class="btn btn-sm btn-facebook">Nuevo Producto</a>
                                        </div>
                                    </div>
                                    <div class="table-resposive">
                                        <table class="table" id="productoterminado">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Nombre del producto</th>
                                                <th>Cantidad de los productos</th>
                                                <th>Precio de los productos</th>
                                                <th>Estado</th>
                                                <th>Created_at</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($productoterminados as $productoterminado)
                                                <tr>
                                                    <td>{{$productoterminado -> id}}</td>
                                                    <td>{{$productoterminado -> nombreproducto}}</td>
                                                    <td>{{$productoterminado -> cantidadproducto}}</td>
                                                    <td>{{$productoterminado -> precioproducto}}</td>
                                                    <td>
									                    @if($productoterminado->estado==1)
									                       <button type="button" class="btn btn-sm btn-success">Activo</button>
									                    @else
									                        <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
									                    @endif
								                    </td>
                                                    <td>{{$productoterminado -> created_at}}</td>
                                                    <td class="td-actions text-right" >
                                                        <a href="{{ route('productoterminado.edit', $productoterminado->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>

                                                      
                                                    </td>
                                                </tr>   
                                                @endforeach                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto">
                                    {{$productoterminados->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
<script>
$(document).ready( function () {
    $('#productoterminado').DataTable();
} );
</script>
@endsection