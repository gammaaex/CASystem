<li class="{{ Request::is('authorities*') ? 'active' : '' }}">
    <a href="{!! route('authorities.index') !!}"><i class="fa fa-edit"></i><span>Authorities</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('groups*') ? 'active' : '' }}">
    <a href="{!! route('groups.index') !!}"><i class="fa fa-edit"></i><span>Groups</span></a>
</li>

<li class="{{ Request::is('faculties*') ? 'active' : '' }}">
    <a href="{!! route('faculties.index') !!}"><i class="fa fa-edit"></i><span>Faculties</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('people*') ? 'active' : '' }}">
    <a href="{!! route('people.index') !!}"><i class="fa fa-edit"></i><span>People</span></a>
</li>

