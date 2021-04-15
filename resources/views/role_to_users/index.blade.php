@extends('layouts.app', [
'namePage' => '',
'class' => 'login-page sidebar-mini ',
'activePage' => 'index'
])

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"></li>
    </ol>
    @if ($is_admin)
        <div class="container-fluid">
            <div class="animated fadeIn">
                @include('flash::message')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i>
                                Role To Users
                                <a class="pull-right" href="{{ route('roleToUsers.create') }}"><i
                                        class="fa fa-plus-square fa-lg"></i></a>
                            </div>
                            <div class="card-body">
                                @include('role_to_users.table')
                                <div class="pull-right mr-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            Role To Users
                            
                        </div>
                        <div class="card-body">
                            You are not Allowed
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    @endif
@endsection
