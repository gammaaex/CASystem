<table class="table table-responsive" id="faculties-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Created By</th>
        <th>Updated By</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($faculties as $faculty)
        <tr>
            <td>{!! $faculty->name !!}</td>
            <td>{!! $faculty->created_by !!}</td>
            <td>{!! $faculty->updated_by !!}</td>
            <td>
                {!! Form::open(['route' => ['faculties.destroy', $faculty->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('faculties.show', [$faculty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('faculties.edit', [$faculty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>