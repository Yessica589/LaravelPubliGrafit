@extends('layouts.main', ['activePage' => 'fichainsumo', 'titlePage' => 'Gestión de Ventas'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">                
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">Gestión de Ventas</h4>
                            <p class="card-category">Consultar Datos</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-head">
                                    <h4 class="text-center text-primary">Productos</h4>
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
                                </div>  
                                @if(count($productos) > 0 )
                                    <div lass="table-resposive">
                                        <table class="table">
                                            <thead  class="text-primary">    <br> <br>           
                                                <tr>
                                                    <th>Nombre Producto</th>
                                                    <th >Cantidad de Productos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($productos as $value)
                                                    <tr>
                                                        <td>{{$value -> nombreproducto}}</td>
                                                        <td>{{$value -> cantidadproducto}}</td>
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="card-footer ml-auto mr-auto">
                                            <a href="{{ route ('ventaproducto.index')}}" class="btn btn-sm btn-facebook mr-3">Terminar consulta</a>
                                        </div>
                                    </div>
                              @endif 
                            </div>                                        
                        </div>                        
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection