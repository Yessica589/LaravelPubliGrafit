@extends('layouts.main', ['activePage' => 'comprainsumo', 'titlePage' => 'Compras'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="#" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Gestión de Compras</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-head">
                                            <h4 class="text-center text-primary">Info Compra</h4>
                                        </div>
                                        <div class="row card-body">
                                            <div class="form-group col-6">
                                                 <label for="" >Nombre Proveedor</label>
                                                <select name="idproveedor" id="" class="form-control">
                                                    <option value="">Seleccione</option>
                                                    @foreach($proveedores as $proveedor)
                                                        <option value="{{  $proveedor->id }}"> {{  $proveedor->nombreproveedor }}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                            <div class="form-group col-6">
                                                 <label for="" >Nombre Empresa</label>
                                                <select name="idproveedor" id="" class="form-control">
                                                    <option value="">Seleccione</option>
                                                    @foreach($proveedores as $proveedor)
                                                        <option value="{{  $proveedor->id }}"> {{  $proveedor->nombreempresa }}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                            <div class="form-group col-6">
                                                 <label for="" >Dirección</label>
                                                <select name="idproveedor" id="" class="form-control">
                                                    <option value="">Seleccione</option>
                                                    @foreach($proveedores as $proveedor)
                                                        <option value="{{  $proveedor->id }}"> {{  $proveedor->direccion }}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                            <div class="form-group col-6">
                                                 <label for="" >Teléfono</label>
                                                <select name="idproveedor" id="" class="form-control">
                                                    <option value="">Seleccione</option>
                                                    @foreach($proveedores as $proveedor)
                                                        <option value="{{  $proveedor->id }}"> {{  $proveedor->telefono }}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                            <div class="form-group col-5">
                                                 <label for="">Fecha Entrega</label>
                                                <input id="" type="date" class="form-control">
                                            </div>
                                            <div class="form-group col-3">
                                                 <label for="">Costo Total</label>
                                                <input id="precio_total" type="number" class="form-control" value="0">
                                            </div>    
                                        </div>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-head">
                                            <h4 class="text-center text-primary">Info insumo</h4>
                                        </div>
                                        <div class="row card-body">
                                            <div class="form-group col-6">
                                                 <label for="">Nombre Insumo</label>
                                                <select name="insumos" id="insumos" class="form-control" onchange="colocar_precio()">
                                                    <option value="">Seleccione</option>
                                                    @foreach($controlinsumos as $controlinsumo)
                                                        <option precioinsumo="{{  $controlinsumo->precioinsumo }}" value="{{  $controlinsumo->id }}"> {{  $controlinsumo->nombreinsumo }}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                            <div class="form-group col-3">
                                                 <label for="">Cantidad</label>
                                                <input type="number" id="cantidadinsumo" class="form-control" value="0">
                                            </div>  
                                            <div class="form-group col-3">
                                                 <label for="">Precio</label>
                                                <input id="precioinsumo" type="number" class="form-control" value="0" readonly>
                                            </div>  
                                            <button onclick="agregar_insumo()" type="submit" class="btn btn-success float-right">Agregar</button>
                                        </div>    
                                    </div>
                                </div> 
                            </div>
                            <br><br>
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
                                <tbody id="tblInsumos">

                                </tbody>
                            </table>
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
                    <tr>
                        <td>
                            <input type="hidden" name="idinsumo[]" value="${idinsumo}" />
                            <input type="hidden" name="cantidadinsumo[]" value="${cantidadinsumo}" />
                            ${insumo_text}    
                        </td>
                        <td>${cantidadinsumo}</td>
                        <td>${precioinsumo}</td>
                        <td>${parseInt(cantidadinsumo) * parseInt(precioinsumo)}</td>
                        <td>
                            <button type="button" class="btn btn-danger">X</button>    
                        </td>
                    </tr>
                `);
            let precio_total = $("#precio_total").val() || 0;
            $("#precio_total").val(parseInt(precio_total) + parseInt(cantidadinsumo) * parseInt(precioinsumo));
        } else {
            alert("Se debe ingresar una cantidad o precio valido");
        }
    }
</script>
@endsection
