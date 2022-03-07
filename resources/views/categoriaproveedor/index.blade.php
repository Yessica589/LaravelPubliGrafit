@extends('layouts.main', ['activePage'=>'categoriaproveedor','titlePage'=>'Categoria Proveedores'])
@section('content')
    <div class="content">
        <div class="container-fluit">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Categoría Proveedor</h4>
                                    <p class="card-category">Categorías Registradas</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-info" roler="success">
                                            {{ session('success')}}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('categoriaproveedor.create')}}" class="btn btn-sm btn-facebook">Nueva categoría</a>
                                        </div>
                                    </div>
                                    <div class="table-resposive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Nombre de la categoría</th>
                                                <th>Created_at</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($categoriaproveedores as $categoriaproveedor)
                                                <tr>
                                                    <td>{{$categoriaproveedor -> id}}</td>
                                                    <td>{{$categoriaproveedor -> nombrecategoria}}</td>
                                                    <td>{{$categoriaproveedor -> created_at}}</td>
                                                    <td class="td-actions text-right" >
                                                        <a href="{{ route('categoriaproveedor.edit', $categoriaproveedor->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>

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
                                    {{$categoriaproveedores->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection