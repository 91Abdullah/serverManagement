@extends('layouts.app', [
    'namePage' => 'roleToUsers',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'edit'
])
@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('roleToUsers.index') !!}">Role To User</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Role To User</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($roleToUser, ['route' => ['roleToUsers.update', $roleToUser->id], 'method' => 'patch']) !!}

                              @include('role_to_users.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection