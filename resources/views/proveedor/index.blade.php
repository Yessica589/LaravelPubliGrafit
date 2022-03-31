@extends('layouts.main', ['activePage'=>'proveedor','titlePage'=>'Proveedores'])
@section('content')
    <div class="content">
        <div class="container-fluit">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Proveedor</h4>
                                    <p class="card-category">Proveedores Registrados</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-info" roler="success">
                                            {{ session('success')}}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('proveedor.create')}}" class="btn btn-sm btn-facebook">Nueva proveedor</a>
                                        </div>
                                    </div>
                                    <div class="table-resposive">
                                        <table class="table" id="proveedor">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Nombre del proveedor</th>
                                                <th>Nombre de la empresa</th>
                                                <th>Teléfono</th>
                                                <th>Celular</th>
                                                <th>Estado</th>
                                                <th>Created_at</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($proveedores as $proveedor)
                                                <tr>
                                                    <td>{{$proveedor -> id}}</td>
                                                    <td>{{$proveedor -> nombreproveedor}}</td>
                                                    <td>{{$proveedor -> nombreempresa}}</td>
                                                    <td>{{$proveedor -> telefono}}</td>
                                                    <td>{{$proveedor -> celular}}</td>
                                                    <td>
									                    @if($proveedor->estado==1)
									                       <button type="button" class="btn btn-sm btn-success">Activo</button>
									                    @else
									                        <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
									                    @endif
								                    </td>
                                                    <td>{{$proveedor -> created_at}}</td>
                                                    <td class="td-actions text-right" >
                                                        <a href="{{ route('proveedor.show', $proveedor->id)}}" class="btn btn-info"> <i class="material-icons">person</i></a>
                                                        <a href="{{ route('proveedor.edit', $proveedor->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>

                                                        
                                                    </td>
                                                </tr>   
                                                @endforeach                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto">
                                    {{$proveedores->links()}}
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
    $('#proveedor').DataTable();
} );
</script>
@endsection