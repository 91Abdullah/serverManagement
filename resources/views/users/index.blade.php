@extends('layouts.app', [
'namePage' => 'Users',
'class' => 'login-page sidebar-mini ',
'activePage' => 'index'
])

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            Users
                            <table class="pull-right">
                                <tr>
                                    <td> <a href="{{ route('users.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                                    </td>
                                </tr>
                            </table>


                        </div>
                        <div class="card-body">
                            @include('users.table')
                            <div class="pull-right mr-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
