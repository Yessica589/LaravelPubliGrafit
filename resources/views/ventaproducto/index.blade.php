@extends('layouts.main', ['activePage' => 'fichainsumo', 'titlePage' => 'Gestión de ventas'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">                
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">Gestión de ventas</h4>
                            <p class="card-category">Ventas Registradas</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-head">
                                    @if (session('status'))
                                        @if(session('status') == '1')
                                            <div class="alert alert-info">
                                                Se guardó
                                            </div>
                                            @else
                                            <div class="alert alert-danger">
                                                {{session('status')}}
                                            </div>
                                        @endif
                                    @endif     
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('ventaproducto.create')}}" class="btn btn-sm btn-facebook">Nueva Venta</a>
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="table-resposive">
                                    <table class="table" id="ventaproducto">   
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre cliente</th>
                                                <th>Precio Total</th>
                                                <th>Fecha venta</th>
                                                <th>Productos</th>
                                                <th>Created_at</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($clientes as $value)
                                                <tr>
                                                    <td>{{$value -> id }}</td>
                                                    <td>{{$value -> nombrecompleto }}</td>
                                                    <td>{{$value -> preciototal }}</td>
                                                    <td>{{$value -> fechaventa }}</td>
                                                    <td class="td-actions">
                                                        <a href="{{ route('ventaproducto.showProducto', $value->id)}}" class="btn btn-info"> <i class="material-icons">plagiarism</i></a>
                                                        
                                                    </td>
                                                    <td>{{$value -> created_at}}</td>
                                                    <td>
									                    @if($value->estado==1)
									                       <button type="button" class="btn btn-sm btn-success">Activo</button>
									                    @else
									                        <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
									                    @endif
								                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>        
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
    $('#ventaproducto').DataTable();
} );
</script>
@endsection