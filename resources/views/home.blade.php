@extends('layouts.app', [
'namePage' => 'Dashboard',
'class' => 'login-page sidebar-mini ',
'activePage' => 'home',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
    <div class="panel-header panel-header-lg">
        <div style="padding:30px 0; text-align: center; color:white;">
            <h2>Welcome To Telecard</h2>
            <h4>Servers Management Console</h4>
            @can('view-documentation')
                <a href="{{ route('docs.index') }}" class="btn btn-primary" type="button" aria-expanded="false"><i
                        class="now-ui-icons files_paper"></i>
                    Documentation</a>
            @endcan

            <a href="#" class="btn btn-primary" type="button" aria-expanded="false"><i
                    class="now-ui-icons location_map-big"></i> Start Tour</a>
        </div>
    </div>
    <div class="content">
        <div class="row">

            @foreach ($servers as $city => $solutionLocation)
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">{{ $city }}</h4>
                        </div>
                        @foreach ($solutionLocation as $solloc => $server)

                            <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseExample-{{ $solloc }}" aria-expanded="false"
                                            aria-controls="collapseExample">
                                            {{ $solloc }}
                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>

                                    <div id="collapseExample-{{ $solloc }}" class="collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        @foreach ($server as $server)
                                            <div class="card-body">
                                                <div id="accordion" role="tablist" aria-multiselectable="true"
                                                    class="card-collapse">
                                                    <div class="card card-plain">
                                                        <div class="card-header" role="tab" id="headingTwo">
                                                            <a href="#">
                                                                {{ $server->Customer_Name }}<div class="pull-right"
                                                                    class="dropdown">
                                                                    {{-- @can('run') --}}
                                                                        <a class="dropdown-toggle" type="button"
                                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="now-ui-icons media-1_button-play"></i>Run
                                                                        </a>
                                                                    {{-- @endcan --}}

                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" target="_blank"
                                                                            href="https://{{ $server->IP . ':' . $server->SSHPort }}">SSH
                                                                            PORT</a>
                                                                        <a class="dropdown-item" target="_blank"
                                                                            href="https://{{ $server->IP . ':' . $server->HTTP_Port }}">HTTPS
                                                                            PORT</a>
                                                                        <a class="dropdown-item" target="_blank"
                                                                            href="https://{{ $server->IP . ':' . $server->WebminPort }}">Webmin
                                                                            PORT</a>
                                                                    </div>
                                                                </div>
                                                                {{-- <i class="now-ui-icons arrows-1_minimal-down"></i> --}}
                                                            </a>
                                                            {{-- <div class="pull-right" style="cursor:pointer;" type="button"
                                                                data-toggle="modal"
                                                                data-target="#exampleModal-{{ $server->id }}">
                                                                <i class="now-ui-icons travel_info"></i>
                                                            </div> --}}
                                                            {{-- <div class="modal fade" id="exampleModal-{{ $server->id }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h2 class="modal-title" id="exampleModalLabel">
                                                                                {{ $server->IP }}
                                                                                <div class="dropdown">
                                                                                    <a class="dropdown-toggle" type="button"
                                                                                        id="dropdownMenuButton"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false">
                                                                                        <i
                                                                                            class="now-ui-icons media-1_button-play"></i>Run
                                                                                    </a>
                                                                                    <div class="dropdown-menu"
                                                                                        aria-labelledby="dropdownMenuButton">
                                                                                        <a class="dropdown-item"
                                                                                            target="_blank"
                                                                                            href="https://{{ $server->IP . ':' . $server->SSHPort }}">SSH
                                                                                            PORT</a>
                                                                                        <a class="dropdown-item"
                                                                                            target="_blank"
                                                                                            href="https://{{ $server->IP . ':' . $server->HTTP_Port }}">HTTP
                                                                                            PORT</a>
                                                                                        <a class="dropdown-item"
                                                                                            target="_blank"
                                                                                            href="https://{{ $server->IP . ':' . $server->WebminPort }}">Webmin
                                                                                            PORT</a>
                                                                                    </div>
                                                                                </div>
                                                                            </h2>
                                                                            {{-- <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button> 
                                                                        </div> --}}

                                                            {{-- //Modal --}}
                                                            {{-- <div class="modal-body">
                                                                            <h5><strong>City</strong> :
                                                                                {{ $city }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Customer Name</strong> :
                                                                                {{ $server->Customer_Name }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Server Password</strong> :
                                                                                {{ $server->Server_Password }}</h5>
                                                                            <hr>
                                                                            <h5><strong>IP</strong> :
                                                                                {{ $server->IP }}
                                                                            </h5>
                                                                            <hr>
                                                                            <h5><strong>Solution Location</strong> :
                                                                                {{ $server->solutionLocation->name }}
                                                                            </h5>
                                                                            <hr>
                                                                            <h5><strong>Solution Type</strong> :
                                                                                {{ $server->solutionType->name }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Department</strong> :
                                                                                {{ $server->department->name }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Hardware</strong> :
                                                                                {{ $server->Hardware }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Service Contract</strong> :
                                                                                {{ $server->Service_Contract }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Comment</strong> :
                                                                                {{ $server->Comment }}</h5>
                                                                            <hr>
                                                                            <h5><strong>ISD Allowed</strong> :
                                                                                {{ $server->ISD_Allowed }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Failover IP</strong> :
                                                                                {{ $server->Failover_IP }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Winbox</strong> :
                                                                                {{ $server->Winbox }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Secondary IP</strong> :
                                                                                {{ $server->Secondary_IP }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Queue Stats</strong> :
                                                                                {{ $server->Queue_Stats }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Customer Report</strong> :
                                                                                {{ $server->Customer_Report }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Q Panel</strong> :
                                                                                {{ $server->Q_Panel }}</h5>
                                                                            <hr>
                                                                            <h5><strong>SSH PORT</strong> :
                                                                                {{ $server->SSH_PORT }}</h5>
                                                                            <hr>
                                                                            <h5><strong>HTTP PORT</strong> :
                                                                                {{ $server->HTTP_PORT }}</h5>
                                                                            <hr>
                                                                            <h5><strong>Webmin PORT</strong> :
                                                                                {{ $server->Webmin_PORT }}</h5>
                                                                        </div> 
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        {{-- <div id="collapseThree-{{ $server->id }}" class="collapse"
                                                            role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="card-body">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col"></th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                Customer Name
                                                                            </th>
                                                                            <td>
                                                                                {{ $server->Customer_Name ? $server->Customer_Name : '--NULL--' }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                Queue Stats
                                                                            </th>
                                                                            <td>
                                                                                @if ($server->Queue_Stats == 'Yes')
                                                                                    <a href="https://{{ $server->IP }}/queue-stats"
                                                                                        target="_blank">Yes</a>
                                                                                @else
                                                                                    --NULL--
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                Queue Stats
                                                                            </th>
                                                                            <td>
                                                                                @if ($server->Customer_Report == 'Yes')
                                                                                    <a href="https://{{ $server->IP }}/custom_report-stats"
                                                                                        target="_blank">Yes</a>
                                                                                @else
                                                                                    --NULL--
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                Q Panel
                                                                            </th>
                                                                            <td>
                                                                                @if ($server->Q_Panel == 'Yes')
                                                                                    <a href="https://{{ $server->IP }}/qpanel-stats"
                                                                                        target="_blank">Yes</a>
                                                                                @else
                                                                                    --NULL--
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                SSH PORT
                                                                            </th>
                                                                            <td>                                                                                
                                                                                {{ $server->SSH_PORT ? $server->SSH_PORT : '--NULL--' }}                                                                                
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                HTTP PORT
                                                                            </th>
                                                                            <td>                                                                                
                                                                                {{ $server->HTTP_PORT ? $server->HTTP_PORT : '--NULL--' }}                                                                                
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                Webmin PORT
                                                                            </th>
                                                                            <td>                                                                                
                                                                                {{ $server->Webmin_PORT ? $server->Webmin_PORT : '--NULL--' }}                                                                                
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                

                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>

                        @endforeach

                        <div class="card-footer">
                            <div class="stats">
                                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@push('js')

@endpush
