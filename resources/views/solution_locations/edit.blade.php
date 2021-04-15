@extends('layouts.app', [
    'namePage' => 'solution_locations',
    'class' => 'login-page sidebar-mini',
    'activePage' => 'edit'
])

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('solutionLocations.index') !!}">Solution Location</a>
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
                              <strong>Edit Solution Location</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($solutionLocation, ['route' => ['solutionLocations.update', $solutionLocation->id], 'method' => 'patch']) !!}

                              @include('solution_locations.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection