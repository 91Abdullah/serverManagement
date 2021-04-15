<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $role->name }}</p>
</div>

<!-- Slug Field -->
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Permissions:</strong>
        @if(!empty($rolePermissions))
            @foreach($rolePermissions as $v)
                <label class="label label-success">{{ $v->name }},</label>
            @endforeach
        @endif
    </div>
</div>
