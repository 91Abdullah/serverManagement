@extends('layouts.app', [
    'namePage' => 'solution_types',
    'class' => 'login-page sidebar-mini',
    'activePage' => 'edit'
])

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('solutionTypes.index') !!}">Solution Type</a>
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
                              <strong>Edit Solution Type</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($solutionType, ['route' => ['solutionTypes.update', $solutionType->id], 'method' => 'patch']) !!}

                              @include('solution_types.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection