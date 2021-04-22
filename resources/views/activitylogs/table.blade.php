<div class="table-responsive-sm">
    <table class="table table-striped" id="roles-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Log name</th>
                <th>Description</th>
                <th>Subject Type</th>
                <th>Causer Type</th>
                
                {{-- <th colspan="3">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($activitylogs as $activitylog)
                <tr>
                    <td>{{ $activitylog->id }}</td>
                    <td>{{ $activitylog->log_name }}</td>
                    <td>{{ $activitylog->description }}</td>
                    <td>{{ $activitylog->subject_type }}</td>
                    <td>{{ $activitylog->causer_type }}</td>

                    
                </tr>
                
            @endforeach
            
        </tbody>
    </table>
</div>
