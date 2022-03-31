@extends('layouts.main', ['activePage' => 'fichainsumo', 'titlePage' => 'Nueva Ficha Tecnica'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">                
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">Ficha Técnica de producto terminado</h4>
                            <p class="card-category">Ingresar Datos</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-head">
                                        <h4 class="text-center text-primary">Crear Ficha</h4>                                      
                                    </div>
                                    <form
                                    action="{{ route('fichainsumo.store') }}"
                                    method="post"
                                    class="form-horizontal"
                                    >
                                    @csrf
                                    <div class="row card-body">
                                        <div class="form-group col-6">
                                        <label for="">Nombre Producto</label>
                                        <select name="idproducto" id="idproducto" class="form-control">
                                            <option value="">Seleccione</option>
                                            @foreach($productoterminados as $productoterminado)
                                            <option value="{{  $productoterminado->id }}">
                                            {{ $productoterminado->nombreproducto }}</option
                                            >
                                            @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group col-3">
                                        <label for="">Precio</label>
                                        <input id="precio_total" type="number" class="form-control" disabled />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                        <div class="card-head">
                                            <h4 class="text-center text-primary">Info insumo</h4>
                                        </div>
                                        <div class="row card-body">
                                            <div class="form-group col-6">
                                            <label for="">Nombre Insumo</label>
                                            <select
                                                name="insumos"
                                                id="insumos"
                                                class="form-control"
                                                onchange="colocar_precio()"
                                            >
                                                <option value="">Seleccione</option>
                                                @foreach($controlinsumos as $controlinsumo)
                                                <option
                                                precioinsumo="{{  $controlinsumo->precioinsumo }}"
                                                value="{{  $controlinsumo->id }}"
                                                >
                                                {{ $controlinsumo->nombreinsumo }}</option
                                                >
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="form-group col-3">
                                            <label for="">Cantidad</label>
                                            <input type="number" id="cantidadinsumo" class="form-control" />
                                            </div>
                                            <div class="form-group col-3">
                                            <label for="">Precio</label>
                                            <input
                                                id="precioinsumo"
                                                type="number"
                                                class="form-control"
                                                readonly
                                            />
                                            </div>
                                            <a onclick="agregar_insumo()" class="btn btn-success float-right"
                                            >Agregar</a
                                            >
                                        </div>
                                        </div>
                                    </div>
                                    <br /><br />

                                    <table class="table">
                                        <thead class="text-primary">
                                        <tr>
                                            <th>Nombre insumo</th>
                                            <th>Cantidad de Insumos</th>
                                            <th>Precio de los Insumos</th>
                                            <th>Total</th>
                                            <th>Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tblInsumos"></tbody>
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
        let precioinsumo = $("#insumos option:selected").attr("precioinsumo");
        $("#precioinsumo").val(precioinsumo);
    }

    function agregar_insumo() {
        let idinsumo = $("#insumos option:selected").val();
        let insumo_text = $("#insumos option:selected").text();
        let cantidadinsumo = $("#cantidadinsumo").val();
        let precioinsumo = $("#precioinsumo").val();
        if (cantidadinsumo > 0 && precioinsumo > 0) {
            $("#tblInsumos").append(`
                    <tr id="tr-${idinsumo}">
                        <td>
                            <input type="hidden" name="precioinsumo[]" value="${precioinsumo}" />
                            <input type="hidden" name="idinsumo[]" value="${idinsumo}" />
                            <input type="hidden" name="cantidades[]" value="${cantidadinsumo}" />
                            ${insumo_text}    

                        </td>
                        <td>${cantidadinsumo}</td>
                        <td>${precioinsumo}</td>
                        <td>${parseInt(cantidadinsumo) * parseInt(precioinsumo)}</td>
                        <td class="td-actions">
                            <button type="button" class="btn btn-danger " onclick="eliminar_insumo(${idinsumo}, ${parseInt(cantidadinsumo) * parseInt(precioinsumo)})" ><i class="material-icons">delete</i></button>    
                        </td>
                    </tr>
                `);
            let precio_total = $("#precio_total").val() || 0;
            $("#precio_total").val(parseInt(precio_total) + parseInt(cantidadinsumo) * parseInt(precioinsumo));
        } else {
            alert("Se debe ingresar una cantidad o precio valido");
        }
    }

    function eliminar_insumo(id, total){
        $("#tr-"+id).remove();
        let precio_total = $("#precio_total").val() || 0;
            $("#precio_total").val(parseInt(precio_total) - total);
    }
</script>
@endsection