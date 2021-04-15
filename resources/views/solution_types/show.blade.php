@extends('layouts.app', [
    'namePage' => 'solution_types',
    'class' => 'login-page sidebar-mini',
    'activePage' => 'show'
])

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('solutionTypes.index') }}">Solution Type</a>
            </li>
            <li class="breadcrumb-item active"></li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Details</strong>
                                  <a href="{{ route('solutionTypes.index') }}" class="btn btn-light">Back</a>
                             </div>
                             <div class="card-body">
                                 @include('solution_types.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
