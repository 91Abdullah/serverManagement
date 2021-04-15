<div class="table-responsive-sm">
    <table class="table table-striped" id="roleToUsers-table">
        <thead>
            <tr>
                <th>Role</th>
                <th>User</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roleToUsers as $roleToUser)
                <tr>
                    <td>{{ $roleToUser->role->name }}</td>
                    <td>{{ $roleToUser->user->name }}</td>
                    <td>
                        {!! Form::open(['route' => ['roleToUsers.destroy', $roleToUser->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('roleToUsers.show', [$roleToUser->id]) }}"
                                class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                            <a href="{{ route('roleToUsers.edit', [$roleToUser->id]) }}" class='btn btn-ghost-info'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
