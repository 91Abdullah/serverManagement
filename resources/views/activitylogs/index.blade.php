
@extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'index'
    ])
    @section('content')
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Activities</li>
        </ol>
    
            <div class="container-fluid">
                <div class="animated fadeIn">
                    @include('flash::message')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i>
                                    Activities
                                    
    
                                </div>
                                <div class="card-body">
                                    @include('activitylogs.table')
                                    <div class="pull-right mr-3">
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    @endsection
    