@extends('layouts.app', [
'namePage' => '',
'class' => 'login-page sidebar-mini ',
'activePage' => 'create'
])

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('roles.index') !!}">Role</a>
        </li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
    {{-- @if ($is_admin) --}}
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-plus-square-o fa-lg"></i>
                            <strong>Create Role</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'roles.store']) !!}

                            @include('roles.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- @else --}}


@endsection
