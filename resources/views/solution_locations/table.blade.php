<div class="table-responsive-sm">
    <table class="table table-striped" id="solutionLocations-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solutionLocations as $solutionLocation)
                <tr>
                    <td>{{ $solutionLocation->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('solutionLocations.show', $solutionLocation->id) }}">Show</a>
                        @can('solution-location-edit')
                            <a class="btn btn-primary"
                                href="{{ route('solutionLocations.edit', $solutionLocation->id) }}">Edit</a>
                        @endcan
                        @can('solution-location-delete')
                            {!! Form::open(['method' => 'DELETE', 'route' => ['solutionLocations.destroy', $solutionLocation->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- <a class="btn" onclick="return confirm('Are you sure to truncate All data?')" href="{{ route('solutionlocation.truncate') }}" href="">Erase All Solution Locations</a> --}}
