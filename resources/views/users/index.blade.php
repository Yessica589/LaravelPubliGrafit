@extends('layouts.main', ['activePage'=>'users','titlePage'=>'Usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluit">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Usuarios</h4>
                                    <p class="card-category">Usuarios Registrados</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-info" roler="success">
                                            {{ session('success')}}
                                        </div>
                                    @endif
                                    
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('users.create')}}" class="btn btn-sm btn-facebook">Nuevo Usuario</a>
                                        </div>
                                    </div>
                                    <div class="table-resposive">
                                        <table class="table" id="users">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Username</th>
                                                <th>Correo</th>
                                                <th>Estado</th>
                                                <th>Created_at</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user -> id}}</td>
                                                    <td>{{$user -> name}}</td>
                                                    <td>{{$user -> apellido}}</td>
                                                    <td>{{$user -> username}}</td>
                                                    <td>{{$user -> email}}</td>
                                                    <td>
									                    @if($user->estado==1)
									                       <button type="button" class="btn btn-sm btn-success">Activo</button>
									                    @else
									                        <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
									                    @endif
								                    </td>
                                                    <td>{{$user -> created_at}}</td>
                                                    <td class="td-actions text-right" >
                                                        <a href="{{ route('users.show', $user->id)}}" class="btn btn-info"> <i class="material-icons">person</i></a>
                                                        <a href="{{ route('users.edit', $user->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>

                                                       
                                                    </td>
                                                </tr>   
                                                @endforeach                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto">
                                    {{$users->links()}}
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
    $('#users').DataTable();
} );
</script>
@endsection