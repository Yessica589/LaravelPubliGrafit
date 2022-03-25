@extends('layouts.main', ['activePage'=>'proveedor','titlePage'=>'Consulta proveedor'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <div class="card-title">Proveedor</div>
                            
                        </div>
                        <!--body-->
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text"></p>
                                            <div class="author">
                                                <a href="#" class="d-flex">
                                                @foreach($detalle as $detal)
                                                <img src="{{ asset('/img/avatar.png') }}" alt="image" class="avatar">
                                                    <h5 class="title-mx-3">{{ $detal->nombreproveedor }}</h5>
                                                </a>
                                                <p class="description">
                                                    {{ $detal->nombreempresa}} <br>
                                                    {{ $detal->telefono}} <br>
                                                    {{ $detal->celular}} <br>
                                                    {{ $detal->email}} <br>
                                                    {{ $detal->direccion}} <br>
                                                    {{ $detal->nombrecategoria}} <br>
                                                    <?php
                                                        $estado = $detal->estado;
                                                        if( $estado == 0){
                                                           echo 'Inactivo';
                                                        }
                                                        else {
                                                            echo 'Activo';
                                                        }
                                                    ?>
                                                    
                                                    
                                                      <br>
                                                    {{ $detal->created_at}}<br>
                                                </p>
                                                @endforeach
                                            </div>
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route ('proveedor.index')}}" class="btn btn-sm btn-facebook mr-3">Terminar consulta</a>
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
