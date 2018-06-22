<table class="table table-responsive" id="authorities-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Created By</th>
        <th>Updated By</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($authorities as $authority)
        <tr>
            <td>{!! $authority->name !!}</td>
            <td>{!! $authority->created_by !!}</td>
            <td>{!! $authority->updated_by !!}</td>
            <td>
                {!! Form::open(['route' => ['authorities.destroy', $authority->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('authorities.show', [$authority->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('authorities.edit', [$authority->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>