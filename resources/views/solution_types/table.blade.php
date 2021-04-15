<div class="table-responsive-sm">
    <table class="table table-striped" id="solutionTypes-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solutionTypes as $solutionType)
                <tr>
                    <td>{{ $solutionType->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('solutionTypes.show', $solutionType->id) }}">Show</a>
                        @can('solution-type-edit')
                            <a class="btn btn-primary" href="{{ route('solutionTypes.edit', $solutionType->id) }}">Edit</a>
                        @endcan
                        @can('solution-type-delete')
                            {!! Form::open(['method' => 'DELETE', 'route' => ['solutionTypes.destroy', $solutionType->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
