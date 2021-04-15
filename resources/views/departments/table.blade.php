<div class="table-responsive-sm">
    <table class="table table-striped" id="departments-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('departments.show', $department->id) }}">Show</a>
                        @can('department-edit')
                            <a class="btn btn-primary" href="{{ route('departments.edit', $department->id) }}">Edit</a>
                        @endcan
                        @can('department-delete')
                            {!! Form::open(['method' => 'DELETE', 'route' => ['departments.destroy', $department->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
