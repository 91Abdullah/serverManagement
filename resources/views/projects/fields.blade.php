<!-- Project Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_name', 'Project Name:') !!}
    {!! Form::text('project_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('project_description', 'Project Description:') !!}
    {!! Form::textarea('project_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
</div>
