<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Departments:</strong>
        @if(!empty($userDepartments))
            @foreach($userDepartments as $v)
                <label class="label label-success">{{ $v->name }},</label>
            @endforeach
        @endif
    </div>
</div>



<!-- Password Field -->
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Roles:</strong>
        @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
            @endforeach
        @endif
    </div>
</div>