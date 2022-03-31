@extends('layouts.main', ['activePage' => 'ventaproducto', 'titlePage' => 'Nueva Venta'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">                
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">Gestión de ventas</h4>
                            <p class="card-category">Ingresar Datos</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-head">
                                        <h4 class="text-center text-primary">Info Venta</h4>
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
                                    <form
                                    action="{{ route('ventaproducto.store') }}"
                                    method="post"
                                    class="form-horizontal"
                                    >
                                    @csrf
                                    <div class="row card-body">
                                        <div class="form-group col-6">
                                        <label for="">Nombre Cliente</label>
                                        <select name="idcliente" id="idcliente" class="form-control">
                                            <option value="">Seleccione</option>
                                            @foreach($clientes as $cliente)
                                            <option value="{{  $cliente->id }}">
                                            {{ $cliente->nombrecompleto }}</option
                                            >
                                            @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group col-3">
                                        <label for="">Precio Total</label>
                                        <input id="precio_total" type="number" class="form-control" disabled />
                                        </div>
                                        <div class="form-group col-3">
                                        <label for="">Fecha venta</label>
                                        <input id="fechaventa" name="fechaventa" type="date" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                        <div class="card-head">
                                            <h4 class="text-center text-primary">Info Producto</h4>
                                        </div>
                                        <div class="row card-body">
                                            <div class="form-group col-6">
                                            <label for="">Nombre Producto</label>
                                            <select
                                                name="productos"
                                                id="productos"
                                                class="form-control"
                                                onchange="colocar_precio()"
                                            >
                                                <option value="">Seleccione</option>
                                                @foreach($productoterminados as $productoterminado)
                                                <option
                                                precioproducto="{{  $productoterminado->precioproducto }}"
                                                value="{{  $productoterminado->id }}"
                                                >
                                                {{ $productoterminado->nombreproducto }}</option
                                                >
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="form-group col-3">
                                            <label for="">Cantidad</label>
                                            <input type="number" id="cantidadproducto" class="form-control" />
                                            </div>
                                            <div class="form-group col-3">
                                            <label for="">Precio</label>
                                            <input
                                                id="precioproducto"
                                                type="number"
                                                class="form-control"
                                                readonly
                                            />
                                            </div>
                                            <a onclick="agregar_producto()" class="btn btn-success float-right"
                                            >Agregar</a
                                            >
                                        </div>
                                        </div>
                                    </div>
                                    <br /><br />

                                    <table class="table">
                                        <thead class="text-primary">
                                        <tr>
                                            <th>Nombre producto</th>
                                            <th>Cantidad de produtos</th>
                                            <th>Precio de los productos</th>
                                            <th>Total</th>
                                            <th>Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tblProductos"></tbody>
                                    </table>
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" class="btn btn-danger">Guardar</button>
                                    </div>
                                    </form>        
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
    function colocar_precio() {
        let precioproducto = $("#productos option:selected").attr("precioproducto");
        $("#precioproducto").val(precioproducto);
    }

    function agregar_producto() {
        let idproducto = $("#productos option:selected").val();
        let producto_text = $("#productos option:selected").text();
        let cantidadproducto = $("#cantidadproducto").val();
        let precioproducto = $("#precioproducto").val();
        if (cantidadproducto > 0 && precioproducto > 0) {
            $("#tblProductos").append(`
                    <tr id="tr-${idproducto}">
                        <td>
                            <input type="hidden" name="precioproducto[]" value="${precioproducto}" />
                            <input type="hidden" name="idproducto[]" value="${idproducto}" />
                            <input type="hidden" name="cantidades[]" value="${cantidadproducto}" />
                            ${producto_text}    

                        </td>
                        <td>${cantidadproducto}</td>
                        <td>${precioproducto}</td>
                        <td>${parseInt(cantidadproducto) * parseInt(precioproducto)}</td>
                        <td>
                            <button type="button" class="btn btn-danger" onclick="eliminar_producto(${idproducto}, ${parseInt(cantidadproducto) * parseInt(precioproducto)})" ><i class="material-icons">delete</i></button>    
                        </td>
                    </tr>
                `);
                let precio_total = $("#precio_total").val() || 0;
            $("#precio_total").val(parseInt(precio_total) + parseInt(cantidadproducto) * parseInt(precioproducto));
        } else {
            alert("Se debe ingresar una cantidad o precio valido");
        }
    }

    function eliminar_producto(id, total){
        $("#tr-"+id).remove();
        let precio_total = $("#precio_total").val() || 0;
            $("#precio_total").val(parseInt(precio_total) - total);
    }
</script>
@endsection