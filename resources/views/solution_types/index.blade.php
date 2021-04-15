@extends('layouts.app', [
'namePage' => 'solution_types',
'class' => 'login-page sidebar-mini',
'activePage' => 'index'
])

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"></li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            SolutionTypes
                            @can('solution-type-create')
                                <a class="pull-right" href="{{ route('solutionTypes.create') }}"><i
                                        class="fa fa-plus-square fa-lg"></i></a>
                            @endcan
                        </div>
                        <div class="card-body">
                            @include('solution_types.table')
                            <div class="pull-right mr-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
