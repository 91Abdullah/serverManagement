<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Confirm Password:</strong>
        {!! Form::password('confirm-password',null, array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="card card-chart">
        <div class="card-header">
            <h4 class="card-title">Departments</h4>
        </div>
        <div class="card-body">
            @foreach ($department[0] as $depart)
                <label>{{ Form::checkbox('department[]', $depart->id, in_array($depart->id, $userDepartments) ? true : false, ['class' => 'name']) }}
                    {{ $depart->name }}</label>
                <br />
            @endforeach
        </div>
        <div class="card-footer">--</div>
    </div>
</div>

<!-- Email Verified At Field -->




<!-- Password Field -->

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Role:</strong>
        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
</div>
