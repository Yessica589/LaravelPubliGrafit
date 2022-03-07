@extends('layouts.main', ['activePage'=>'cliente','titlePage'=>'Clientes'])
@section('content')
    <div class="content">
        <div class="container-fluit">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Clientes</h4>
                                    <p class="card-category">Clientes Registrados</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-info" roler="success">
                                            {{ session('success')}}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('cliente.create')}}" class="btn btn-sm btn-facebook">Nuevo cliente</a>
                                        </div>
                                    </div>
                                    <div class="table-resposive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Nombre Completo</th>
                                                <th>Teléfono</th>
                                                <th>Celular</th>
                                                <th>Created_at</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($clientes as $cliente)
                                                <tr>
                                                    <td>{{$cliente -> id}}</td>
                                                    <td>{{$cliente -> nombrecompleto}}</td>
                                                    <td>{{$cliente -> telefono}}</td>
                                                    <td>{{$cliente -> celular}}</td>
                                                    <td>{{$cliente -> created_at}}</td>
                                                    <td class="td-actions text-right" >
                                                    <a href="{{ route('cliente.show', $cliente->id)}}" class="btn btn-info"> <i class="material-icons">person</i></a>
                                                    <a href="{{ route('cliente.edit', $cliente->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>

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
                                    {{$clientes->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection