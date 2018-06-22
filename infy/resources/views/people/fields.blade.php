<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Kana Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name_kana', 'Last Name Kana:') !!}
    {!! Form::text('last_name_kana', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Kana Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name_kana', 'First Name Kana:') !!}
    {!! Form::text('first_name_kana', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Faculty Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faculty_id', 'Faculty Id:') !!}
    {!! Form::number('faculty_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Admitted On Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admitted_on', 'Admitted On:') !!}
    {!! Form::date('admitted_on', null, ['class' => 'form-control']) !!}
</div>

<!-- Student Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_number', 'Student Number:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('student_number', false) !!}
        {!! Form::checkbox('student_number', '1', null) !!} 1
    </label>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Group Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_id', 'Group Id:') !!}
    {!! Form::number('group_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role Id:') !!}
    {!! Form::number('role_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Interest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interest', 'Interest:') !!}
    {!! Form::text('interest', null, ['class' => 'form-control']) !!}
</div>

<!-- Special Ability Field -->
<div class="form-group col-sm-6">
    {!! Form::label('special_ability', 'Special Ability:') !!}
    {!! Form::text('special_ability', null, ['class' => 'form-control']) !!}
</div>

<!-- Portfolio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('portfolio', 'Portfolio:') !!}
    {!! Form::text('portfolio', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_link', 'Image Link:') !!}
    {!! Form::text('image_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::text('created_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_by', 'Updated By:') !!}
    {!! Form::text('updated_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('people.index') !!}" class="btn btn-default">Cancel</a>
</div>
