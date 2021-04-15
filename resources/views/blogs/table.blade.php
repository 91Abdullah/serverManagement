<div class="table-responsive-sm">
    <table class="table table-striped" style="overflow-x:auto; overflow-y:auto;" id="blogs-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{!! $blog->content !!}</td>
                    <td>
                        {!! Form::open(['route' => ['blogs.destroy', $blog->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('blogs.show', [$blog->id]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            @can('blog-edit')
                                <a href="{{ route('blogs.edit', [$blog->id]) }}" class='btn btn-ghost-info'><i
                                        class="fa fa-edit"></i></a>
                            @endcan
                            @csrf
                            @method('DELETE')
                            @can('blog-delete')
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            @endcan
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
