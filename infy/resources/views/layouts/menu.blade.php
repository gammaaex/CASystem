<li class="{{ Request::is('authorities*') ? 'active' : '' }}">
    <a href="{!! route('authorities.index') !!}"><i class="fa fa-edit"></i><span>Authorities</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

