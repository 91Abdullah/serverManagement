@extends('layouts.app', [
    'namePage' => 'solution_types',
    'class' => 'login-page sidebar-mini',
    'activePage' => 'create'
])

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('solutionTypes.index') !!}">Solution Type</a>
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
                                <strong>Create Solution Type</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'solutionTypes.store']) !!}

                                   @include('solution_types.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
