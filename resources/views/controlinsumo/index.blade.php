@extends('layouts.main', ['activePage'=>'controlinsumo','titlePage'=>'Control insumos'])
@section('content')
    <div class="content">
        <div class="container-fluit">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Control insumo</h4>
                                    <p class="card-category">Insumos Registrados</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-info" roler="success">
                                            {{ session('success')}}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('controlinsumo.create')}}" class="btn btn-sm btn-facebook">Nuevo insumo</a>
                                        </div>
                                    </div>
                                    <div class="table-resposive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Nombre del insumo</th>
                                                <th>Cantidad de insumo</th>
                                                <th>Precio del insumo</th>
                                                <th>Estado</th>
                                                <th>Created_at</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($controlinsumos as $controlinsumo)
                                                <tr>
                                                    <td>{{$controlinsumo -> id}}</td>
                                                    <td>{{$controlinsumo -> nombreinsumo}}</td>
                                                    <td>{{$controlinsumo -> cantidadinsumo}}</td>
                                                    <td>{{$controlinsumo -> precioinsumo}}</td>
                                                    <td>{{$controlinsumo -> estado}}</td>
                                                    <td>{{$controlinsumo -> created_at}}</td>
                                                    <td class="td-actions text-right" >
                                                        <a href="{{ route('controlinsumo.edit', $controlinsumo->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>

                                                        <button class="btb btn-outline-danger" type="button">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>   
                                                @endforeach                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto">
                                    {{$controlinsumos->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection