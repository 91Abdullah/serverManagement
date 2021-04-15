@extends('layouts.app', [
'namePage' => '',
'class' => 'login-page sidebar-mini ',
'activePage' => 'index'
])

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Permissions</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Permissions
                             <a class="pull-right" href="{{ route('permissions.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('permissions.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

