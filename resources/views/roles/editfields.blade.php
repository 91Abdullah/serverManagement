<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 191, 'maxlength' => 191]) !!}
</div>

<!-- Slug Field -->
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Permissions:</strong>
        <div class="content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Roles</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($parentpermission[0] as $role)
                                <label>{{ Form::checkbox('permission[]', $role->id, in_array($role->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $role->nick_name }}</label>
                                <br />
                            @endforeach
                        </div>
                        <div class="card-footer">--</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Servers</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($parentpermission[1] as $role)
                                <label>{{ Form::checkbox('permission[]', $role->id, in_array($role->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $role->nick_name }}</label>
                                <br />
                            @endforeach
                        </div>
                        <div class="card-footer">--</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Cities</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($parentpermission[2] as $role)
                                <label>{{ Form::checkbox('permission[]', $role->id, in_array($role->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $role->nick_name }}</label>
                                <br />
                            @endforeach
                        </div>
                        <div class="card-footer">--</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Departments</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($parentpermission[3] as $role)
                                <label>{{ Form::checkbox('permission[]', $role->id, in_array($role->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $role->nick_name }}</label>
                                <br />
                            @endforeach
                        </div>
                        <div class="card-footer">--</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($parentpermission[4] as $role)
                                <label>{{ Form::checkbox('permission[]', $role->id, in_array($role->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $role->nick_name }}</label>
                                <br />
                            @endforeach
                        </div>
                        <div class="card-footer">--</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Solution Types</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($parentpermission[5] as $role)
                                <label>{{ Form::checkbox('permission[]', $role->id, in_array($role->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $role->nick_name }}</label>
                                <br />
                            @endforeach
                        </div>
                        <div class="card-footer">--</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Solution Locations</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($parentpermission[6] as $role)
                                <label>{{ Form::checkbox('permission[]', $role->id, in_array($role->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $role->nick_name }}</label>
                                <br />
                            @endforeach
                        </div>
                        <div class="card-footer">--</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Blogs</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($parentpermission[7] as $role)
                                <label>{{ Form::checkbox('permission[]', $role->id, in_array($role->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $role->nick_name }}</label>
                                <br />
                            @endforeach
                        </div>
                        <div class="card-footer">--</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Documentation</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($parentpermission[8] as $role)
                                <label>{{ Form::checkbox('permission[]', $role->id, in_array($role->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $role->nick_name }}</label>
                                <br />
                            @endforeach
                        </div>
                        <div class="card-footer">--</div>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
</div>
