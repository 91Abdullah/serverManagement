<li class="nav-item {{ Request::is('projects*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('projects.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Projects</span>
    </a>
</li>
<li class="nav-item {{ Request::is('servers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('servers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Servers</span>
    </a>
</li>

<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>
<li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Roles</span>
    </a>
</li>
<li class="nav-item {{ Request::is('roleToUsers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('roleToUsers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Role To Users</span>
    </a>
</li>
<li class="nav-item {{ Request::is('cities*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cities.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Cities</span>
    </a>
</li>
<li class="nav-item {{ Request::is('solutionLocations*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('solutionLocations.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Solution Locations</span>
    </a>
</li>
<li class="nav-item {{ Request::is('solutionTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('solutionTypes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Solution Types</span>
    </a>
</li>
<li class="nav-item {{ Request::is('departments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('departments.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Departments</span>
    </a>
</li>
<li class="nav-item {{ Request::is('blogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Blogs</span>
    </a>
</li>
<li class="nav-item {{ Request::is('permissions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('permissions.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Permissions</span>
    </a>
</li>
