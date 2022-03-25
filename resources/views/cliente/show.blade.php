@extends('layouts.main', ['activePage'=>'cliente','titlePage'=>'Consulta cliente'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <div class="card-title">Cliente</div>
                            <p class="card-category">Vista consulta del cliente {{ $cliente->nombrecompleto}}</p>
                        </div>
                        <!--body-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text"></p>
                                            <div class="author">
                                                <a href="#" class="d-flex">
                                                <img src="{{ asset('/img/avatar.png') }}" alt="image" class="avatar">
                                                    <h5 class="title-mx-3">{{ $cliente->nombrecompleto }}</h5>
                                                </a>
                                                <p class="description">
                                                    {{ $cliente->telefono}} <br>
                                                    {{ $cliente->celular}} <br>
                                                    {{ $cliente->email}} <br>
                                                    {{ $cliente->direccion}} <br>
                                                    <?php
                                                        $estado = $cliente->estado;
                                                        if( $estado == 0){
                                                           echo 'Inactivo';
                                                        }
                                                        else {
                                                            echo 'Activo';
                                                        }
                                                    ?><br>
                                                    {{ $cliente->created_at}}<br>
                                                </p>
                                            </div>
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route ('cliente.index')}}" class="btn btn-sm btn-facebook mr-3">Terminar consulta</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card user -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection