@extends('layouts.main', ['activePage' => 'fichainsumo', 'titlePage' => 'Ficha Tecnica'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">                
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">Ficha Técnica de producto terminado</h4>
                            <p class="card-category">Fichas Registradas</p>
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
                                            <a href="{{ route('fichainsumo.create')}}" class="btn btn-sm btn-facebook">Nueva Ficha</a>
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="table-resposive">
                                    <table class="table" id="fichainsumo">   
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre Producto</th>
                                                <th>Precio</th>
                                                <th>Insumos</th>
                                                <th>Created_at</th>
                                                <th>Estado</th>
                                                <th class="text-right">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($productoterminados as $value)
                                                <tr>
                                                    <td>{{$value -> id }}</td>
                                                    <td>{{$value -> nombreproducto }}</td>
                                                    <td>{{$value -> precio }}</td>
                                                    <td class="td-actions">
                                                        <a href="{{ route('fichainsumo.showInsumo', $value->id)}}" class="btn btn-info"> <i class="material-icons">plagiarism</i></a>
                                                        
                                                    </td>
                                                    <td>{{$value -> created_at}}</td>
                                                     <td>
									                    @if($value->estado==1)
									                       <button type="button" class="btn btn-sm btn-success">Activo</button>
									                    @else
									                        <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
									                    @endif
								                    </td>
                                                    <td class="td-actions text-right" >
                                                        <a href="#" class="btn btn-warning"> <i class="material-icons">edit</i></a>
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
    $('#fichainsumo').DataTable();
} );
</script>
@endsection
