<div class="table-responsive-sm">
    <table class="table table-striped" id="cities-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>{{ $city->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('cities.show', $city->id) }}">Show</a>
                        @can('city-edit')
                            <a class="btn btn-primary" href="{{ route('cities.edit', $city->id) }}">Edit</a>
                        @endcan
                        @can('city-delete')
                            {!! Form::open(['method' => 'DELETE', 'route' => ['cities.destroy', $city->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- <a class="btn" onclick="return confirm('Are you sure to truncate All data?')" href="{{ route('cities.truncate') }}" href="">Erase All Cities</a> --}}
