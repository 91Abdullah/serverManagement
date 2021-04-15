<div class="table-responsive-sm">
    <div id="importexportmodal">
        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" required class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Import data</button>
            {{-- <a class="btn btn-success" href="{{ route('file-export') }}">Export data</a> --}}
            <a href="{{ route('file-export', 'xls') }}" class="btn btn-success" download>Download Excel xls</a>
            <a href="{{ route('file-export', 'xlsx') }}" class="btn btn-success" download>Download Excel xlsx</a>
            <a href="{{ route('file-export', 'csv') }}" class="btn btn-success" download>Download CSV</a>
        </form>
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
                                        <th>S.no</th>
                                        <th>City</th>
                                        <th>Customer Name</th>
                                        {{-- <th>Server Password</th> --}}
                                        <th>Solution Location</th>
                                        <th>Solution Type</th>
                                        <th>Department</th>
                                        <th>Hardware</th>
                                        <th>Server Primary IP</th>
                                        <th>Run</th>
                                        <th>Solution Distro</th>
                                        <th>Service Contract</th>
                                        <th>Comment</th>
                                        <th>ISD Allowed</th>
                                        <th>Failover IP</th>
                                        <th>Winbox</th>
                                        <th>Secondary IP</th>
                                        <th>Queue Stats</th>
                                        <th>Customer Report</th>
                                        <th>Q Panel</th>
                                        <th>SSH Port</th>
                                        <th>HTP Port</th>
                                        <th>Webmin Port</th>
                                        <th class="disabled-sorting text-right" colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($servers->isNotEmpty())
                                        @foreach ($servers as $server)
                                            <tr>
                                                <td>{{ $number++ }}</td>
                                                <td>{{ $server->city->name }}</td>
                                                <td>{{ $server->Customer_Name }}</td>
                                                {{-- @if ($is_admin)
                                                    <td>{{ $servers->Server_Password }}</td>
                                                @else
                                                    <td>*************</td>
                                                @endif --}}
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
                                                                href="https://{{ $server->IP . ':' . $server->SSHPort }}">SSH
                                                                PORT</a>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="https://{{ $server->IP . ':' . $server->HTTP_Port }}">HTTP
                                                                PORT</a>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="https://{{ $server->IP . ':' . $server->WebminPort }}">Webmin
                                                                PORT</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $server->Solution_Distro }}</td>
                                                <td>{{ $server->Service_Contract }}</td>
                                                <td>{{ $server->Comment }}</td>
                                                <td>{{ $server->ISD_Allowed }}</td>
                                                <td>{{ $server->Failover_IP }}</td>
                                                <td>{{ $server->Winbox }}</td>
                                                <td>{{ $server->Secondary_IP }}</td>
                                                @if ($server->Queue_Stats == 'Yes')
                                                    <td><a href="https://{{ $server->IP }}/queue-stats"
                                                            target="_blank">Yes</a></td>
                                                @else
                                                    <td>No</td>
                                                @endif
                                                @if ($server->Customer_Report == 'Yes')
                                                    <td><a href="https://{{ $server->IP }}/custom_report"
                                                            target="_blank">Yes</a></td>
                                                @else
                                                    <td>No</td>
                                                @endif

                                                @if ($server->Q_Panel == 'Yes')
                                                    <td><a href="https://{{ $server->IP }}/qpanel"
                                                            target="_blank">Yes</a></td>
                                                @else
                                                    <td>No</td>
                                                @endif
                                                <td>{{ $server->SSH_PORT }}</td>
                                                <td>{{ $server->HTTP_PORT }}</td>
                                                <td>{{ $server->Webmin_PORT }}</td>
                                                <td>
                                                    {!! Form::open(['route' => ['servers.destroy', $server->id], 'method' => 'delete']) !!}
                                                    <div class='btn-group'>
                                                        <a href="{{ route('servers.show', [$server->id]) }}"
                                                            class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                                        @can('server-edit')
                                                            <a href="{{ route('servers.edit', [$server->id]) }}"
                                                                class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                                                        @endcan
                                                        @csrf
                                                        @method('DELETE')
                                                        @can('server-delete')
                                                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                                        @endcan
                                                    </div>
                                                    {!! Form::close() !!}
                                                </td>
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
