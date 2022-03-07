@extends('layouts.main', ['activePage'=>'users','titlePage'=>'Consulta Usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <div class="card-title">Usuarios</div>
                            <p class="card-category">Vista consulta del usuario {{ $user->name}}</p>
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
                                                    <h5 class="title-mx-3">{{ $user->name }}</h5>
                                                </a>
                                                <p class="description">
                                                    {{ $user->username}} <br>
                                                    {{ $user->email}} <br>
                                                    {{ $user->created_at}}<br>
                                                </p>
                                            </div>
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route ('users.index')}}" class="btn btn-sm btn-facebook mr-3">Terminar consulta</a>
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