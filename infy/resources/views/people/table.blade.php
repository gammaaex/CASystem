<table class="table table-responsive" id="people-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Last Name Kana</th>
        <th>First Name Kana</th>
        <th>Gender</th>
        <th>Faculty Id</th>
        <th>Admitted On</th>
        <th>Student Number</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Group Id</th>
        <th>Role Id</th>
        <th>Interest</th>
        <th>Special Ability</th>
        <th>Portfolio</th>
        <th>Image Link</th>
        <th>Created By</th>
        <th>Updated By</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($people as $person)
        <tr>
            <td>{!! $person->user_id !!}</td>
            <td>{!! $person->last_name !!}</td>
            <td>{!! $person->first_name !!}</td>
            <td>{!! $person->last_name_kana !!}</td>
            <td>{!! $person->first_name_kana !!}</td>
            <td>{!! $person->gender !!}</td>
            <td>{!! $person->faculty_id !!}</td>
            <td>{!! $person->admitted_on !!}</td>
            <td>{!! $person->student_number !!}</td>
            <td>{!! $person->email !!}</td>
            <td>{!! $person->phone !!}</td>
            <td>{!! $person->group_id !!}</td>
            <td>{!! $person->role_id !!}</td>
            <td>{!! $person->interest !!}</td>
            <td>{!! $person->special_ability !!}</td>
            <td>{!! $person->portfolio !!}</td>
            <td>{!! $person->image_link !!}</td>
            <td>{!! $person->created_by !!}</td>
            <td>{!! $person->updated_by !!}</td>
            <td>
                {!! Form::open(['route' => ['people.destroy', $person->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('people.show', [$person->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('people.edit', [$person->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>