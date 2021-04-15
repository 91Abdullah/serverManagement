<!-- City Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_id', 'Select City:') !!}
    {!! Form::select('city_id', $somedropdowns[0], 'Select City', ['class' => 'form-control']) !!}
</div>

<!-- Customer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Customer_Name', 'Customer Name:') !!}
    {!! Form::text('Customer_Name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>


<!-- Server Password Field -->
<div class="form-group col-sm-6">
    
        {!! Form::label('Server_Password', 'Server Password:') !!}
        <a type="button" class="button" value="Generate" onClick="randomPassword(20);" tabindex="2">
        <i class="now-ui-icons objects_key-25"></i>
        </a>
        {{-- {!! Form::text('Server_Password', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'readonly']) !!} --}}
        <input type="text" name="Server_Password" class="form-control" readonly value=""/>
        <a class="btn">
            <i class="now-ui-icons files_single-copy-04"></i>
        </a>
    
</div>
<div class="form-group col-sm-6">
    {!! Form::label('IP', 'Server Primary IP:') !!}
    {!! Form::text('IP', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Solution Location Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solution_location_id', 'Solution Location:') !!}
    {!! Form::select('solution_location_id', $somedropdowns[1], '', ['class' => 'form-control']) !!}
</div>

<!-- Solution Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solution_type_id', 'Solution Type:') !!}
    {!! Form::select('solution_type_id', $somedropdowns[2], '', ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department:') !!}
    {!! Form::select('department_id', $somedropdowns[3], '', ['class' => 'form-control']) !!}
</div>

<!-- Hardware Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Hardware', 'Hardware:') !!}
    {!! Form::text('Hardware', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>



<div class="form-group col-sm-6">
    {!! Form::label('Solution_Distro', 'Solution Distro:') !!}
    {!! Form::text('Solution_Distro', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Service Contract Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Service_Contract', 'Service Contract:') !!}
    {!! Form::select('Service_Contract', ['1' => 'Yes', '0' => 'No'], '1', ['class' => 'form-control']) !!}
</div>

<!-- Comment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Comment', 'Comment:') !!}
    {!! Form::text('Comment', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Isd Allowed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ISD_Allowed', 'ISD Allowed:') !!}
    {!! Form::select('ISDAllowed', ['1' => 'Yes', '0' => 'No'], '1', ['class' => 'form-control']) !!}
</div>

<!-- Failover Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Failover_IP', 'Failover IP:') !!}
    {!! Form::text('Failover_IP', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Winbox Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Winbox', 'Winbox:') !!}
    {!! Form::text('Winbox', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Secondary Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Secondary_IP', 'Secondary IP:') !!}
    {!! Form::text('Secondary_IP', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Queue Stats Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Queue_Stats', 'Queue Stats:') !!}
    {!! Form::select('Queue_stats', ['1' => 'Yes', '0' => 'No'], '1', ['class' => 'form-control']) !!}
</div>

<!-- Customer Report Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Customer_Report', 'Customer Report:') !!}
    {!! Form::select('Customreport', ['1' => 'Yes', '0' => 'No'], '1', ['class' => 'form-control']) !!}
</div>

<!-- Q Panel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Q_Panel', 'Q Panel:') !!}
    {!! Form::select('Qpanel', ['1' => 'Yes', '0' => 'No'], '1', ['class' => 'form-control']) !!}
</div>

<!-- Ssh Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SSH_PORT', 'SSH Port:') !!}
    {!! Form::text('SSH_PORT', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Http Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('HTTP_PORT', 'HTTP Port:') !!}
    {!! Form::text('HTTP_PORT', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Webmin Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Webmin_PORT', 'Webmin Port:') !!}
    {!! Form::text('Webmin_PORT', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('servers.index') }}" class="btn btn-secondary">Cancel</a>
</div>
@push('js')
<script>
function randomPassword(length) {
    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
    Server_Password=document.getElementsByName('Server_Password');
    Server_Password[0].value = pass;
}
</script>
@endpush