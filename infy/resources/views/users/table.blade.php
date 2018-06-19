<table class="table table-responsive" id="users-table">
    <thead>
        <tr>
            <th>Email</th>
        <th>Password</th>
        <th>Remember Token</th>
        <th>Authority Id</th>
        <th>Left On</th>
        <th>Comment</th>
        <th>Created By</th>
        <th>Updated By</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->email !!}</td>
            <td>{!! $user->password !!}</td>
            <td>{!! $user->remember_token !!}</td>
            <td>{!! $user->authority_id !!}</td>
            <td>{!! $user->left_on !!}</td>
            <td>{!! $user->comment !!}</td>
            <td>{!! $user->created_by !!}</td>
            <td>{!! $user->updated_by !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>