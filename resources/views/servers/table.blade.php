<div class="table-responsive-sm">
    <div id="importexportmodal">

        {!! Form::open(['route' => 'file-import', 'method' => 'post', 'files' => true]) !!}
        @csrf
        <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
            <div class="custom-file text-left">
                <input type="file" name="file" required class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>

            </div>
            <a class="btn btn-success" href="{{ asset('assets/sample_file/sample_servers.csv') }}">Download Sample CSV
                File</a>
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}


        <a href="{{ route('file-export') }}" class="btn btn-success" >Download CSV</a>
        {!! Form::close() !!}
    </div>
    <button class="btn" id="btntotoggle">Import/Export <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="search" required />
        <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @can('server-create')
                            <a class="btn btn-primary btn-round text-white pull-right"
                                href="{{ route('servers.create') }}">Add Server</a>
                        @endcan
                        <h4 class="card-title">Servers</h4>
                        <div class="col-12 mt-2"></div>
                    </div>
                    <div class="card-body">
                        <div class="toolbar" style="overflow-x:auto; overflow-y:auto;">
                            <table class="table table-striped" id="servers-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <td class="sticky"><strong>Actions</strong></td>
                                        <td class="sticky"><strong>S.no</strong></td>
                                        <td class="sticky"><strong>City</strong></td>
                                        <td class="sticky"><strong>Customer Name</strong></td>
                                        <td class="sticky"><strong>Server Password</strong></td>
                                        <td class="sticky"><strong>Solution Location</strong></td>
                                        <td class="sticky"><strong>Solution Type</strong></td>
                                        <td class="sticky"><strong>Department</strong></td>
                                        <td class="sticky"><strong>Hardware</strong></td>
                                        <td class="sticky"><strong>Server Primary IP</strong></td>
                                        <td><strong>Run</strong></td>
                                        <td class="sticky"><strong>Solution Distro</strong></td>
                                        <td class="sticky"><strong>Service Contract</strong></td>
                                        <td class="sticky"><strong>Comment</strong></td>
                                        <td class="sticky"><strong>ISD Allowed</strong></td>
                                        <td class="sticky"><strong>Failover IP</strong></td>
                                        <td class="sticky"><strong>Winbox</strong></td>
                                        <td class="sticky"><strong>Secondary IP</strong></td>
                                        <td class="sticky"><strong>Queue Stats</strong></td>
                                        <td class="sticky"><strong>Custom Report</strong></td>
                                        <td class="sticky"><strong>Q Panel</strong></td>
                                        <td class="sticky"><strong>SSH Port</strong></td>
                                        <td class="sticky"><strong>HTTP Port</strong></td>
                                        <td class="sticky"><strong>HTTPS Port</strong></td>
                                        <td class="sticky"><strong>Webmin Port</strong></td>
                                        <td class="sticky"><strong>Created Date</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($servers->isNotEmpty())
                                        @foreach ($servers as $server)
                                            <tr>
                                                <td>
                                                    {!! Form::open(['route' => ['servers.destroy', $server->id], 'method' => 'delete']) !!}
                                                    <div class=''>
                                                        <a href="{{ route('servers.show', [$server->id]) }}"
                                                            class=''><i class="fa fa-eye"></i></a>
                                                        @can('server-edit')
                                                            <a href="{{ route('servers.edit', [$server->id]) }}"
                                                                class=''><i class="fa fa-edit"></i></a>
                                                        @endcan
                                                        @csrf
                                                        @method('DELETE')
                                                        @can('server-delete')
                                                            {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => '', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                                                            {{-- <a href="" onclick="return confirm('Are you sure?')" type="submit"></a> --}}
                                                            <input style="display:none;"
                                                                onclick="return confirm('Are you sure?')" type="submit"
                                                                id="submit" />

                                                            <span onclick="$('#submit').trigger('click')" type="submit"
                                                                class="" style="cursor:pointer; color:#3294f9">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                        @endcan
                                                    </div>
                                                    {!! Form::close() !!}
                                                </td>
                                                <td>{{ $number++ }}</td>
                                                <td>{{ $server->city->name }}</td>
                                                <td>{{ $server->Customer_Name }}</td>
                                               <td>***********</td>
                                               
                                                <td>{{ $server->solutionLocation->name }}</td>
                                                <td>{{ $server->solutionType->name }}</td>
                                                <td>{{ $server->department->name }}</td>
                                                <td>{{ $server->Hardware }}</td>
                                                <td>{{ $server->IP }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-info dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            With
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" target="_blank"
                                                                href="https://{{ $server->IP . ':' . $server->SSH_PORT }}">SSH
                                                                PORT</a>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="http://{{ $server->IP . ':' . $server->HTTP_PORT }}">HTTP
                                                                PORT</a>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="https://{{ $server->IP . ':' . $server->HTTPS_PORT }}">HTTPS
                                                                PORT</a>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="https://{{ $server->IP . ':' . $server->Webmin_PORT }}">Webmin
                                                                PORT</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $server->Solution_Distro }}</td>
                                                @if ($server->Service_Contract == 'Yes')
                                                    <td><i class="fas fa-check-circle" style="color:green;"></i></td>
                                                @else
                                                    <td><i class="fas fa-times" style="color:red;"></i></td>
                                                @endif
                                                <td>{{ $server->Comment }}</td>
                                                @if ($server->ISD_Allowed == 'Yes')
                                                    <td><i class="fas fa-check-circle" style="color:green;"></i></td>
                                                @else
                                                    <td><i class="fas fa-times" style="color:red;"></i></td>
                                                @endif
                                                <td>{{ $server->Failover_IP }}</td>
                                                <td>{{ $server->Winbox }}</td>
                                                <td>{{ $server->Secondary_IP }}</td>
                                                @if ($server->Queue_Stats == 'Yes')
                                                    <td><a href="https://{{ $server->IP }}/queue-stats"
                                                            target="_blank"><i class="fas fa-check-circle"
                                                                style="color:green;"></i>Go</a></td>
                                                @else
                                                    <td><i class="fas fa-times" style="color:red;"></i></td>
                                                @endif
                                                @if ($server->Customer_Report == 'Yes')
                                                    <td><a href="https://{{ $server->IP }}/custom_report"
                                                            target="_blank"><i class="fas fa-check-circle"
                                                                style="color:green;"></i>Go</a></td>
                                                @else
                                                    <td><i class="fas fa-times" style="color:red;"></i></td>
                                                @endif

                                                @if ($server->Q_Panel == 'Yes')
                                                    <td><a href="https://{{ $server->IP }}/qpanel" target="_blank"><i
                                                                class="fas fa-check-circle"
                                                                style="color:green;"></i>Go</a></td>
                                                @else
                                                    <td><i class="fas fa-times" style="color:red;"></i></td>
                                                @endif
                                                <td>{{ $server->SSH_PORT }}</td>
                                                <td>{{ $server->HTTP_PORT }}</td>
                                                <td>{{ $server->HTTPS_PORT }}</td>
                                                <td>{{ $server->Webmin_PORT }}</td>
                                                <td>{{ $server->created_at }}</td>
                                                <td>{{ $server->update_at }}</td>

                                            </tr>
                                        @endforeach
                                    @else
                                        <div>
                                            <h2>No posts found</h2>
                                        </div>
                                    @endif
                                </tbody>
                            </table>
                            {{ $servers->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{-- {!! $servers->links() !!} --}}
    </div>


</div>
