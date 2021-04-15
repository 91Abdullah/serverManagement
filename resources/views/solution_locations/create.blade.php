@extends('layouts.app', [
    'namePage' => 'solution_locations',
    'class' => 'login-page sidebar-mini',
    'activePage' => 'create'
])

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('solutionLocations.index') !!}">Solution Location</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Create Solution Location</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'solutionLocations.store']) !!}

                                   @include('solution_locations.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
