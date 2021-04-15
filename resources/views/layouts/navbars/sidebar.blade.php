<div class="sidebar" data-color="black">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <img src="{{ asset('images/audi.png') }}" />
        </a>
        <a href="#" class="simple-text logo-normal">
            {{ __('TeleCard') }}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            {{-- @if ($is_admin == 1 or $is_admin == 0) --}}
            <li class="@if ($activePage=='home' ) active @endif">
                <a href="{{ route('home') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="@if ($activePage=='servers' ) active @endif">
                <a href="{{ route('servers.index') }}">
                    <i class="now-ui-icons business_globe"></i>
                    <p> {{ __('Server Management') }} </p>
                </a>
            </li>

            {{-- @if ($is_admin) --}}
            <li>
                <a data-toggle="collapse" href="#tools">
                    <i class="now-ui-icons ui-1_settings-gear-63"></i>
                    <p>
                        {{ __('tools') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse hide" id="tools">
                    <ul class="nav">
                        <li class="@if ($activePage=='cities' ) active @endif">
                            <a href="{{ route('cities.index') }}">
                                <i class="now-ui-icons location_pin"></i>
                                <p> {{ __('Cities') }} </p>
                            </a>
                        </li>
                        <li class="@if ($activePage=='departments' ) active @endif">
                            <a href="{{ route('departments.index') }}">
                                <i class="now-ui-icons design_vector"></i>
                                <p> {{ __('Departments') }} </p>
                            </a>
                        </li>
                        <li class="@if ($activePage=='solutionLocations' ) active @endif">
                            <a href="{{ route('solutionLocations.index') }}">
                                <i class="now-ui-icons location_compass-05"></i>
                                <p> {{ __('Solution Locations') }} </p>
                            </a>
                        </li>
                        <li class="@if ($activePage=='solutionTypes' ) active @endif">
                            <a href="{{ route('solutionTypes.index') }}">
                                <i class="now-ui-icons business_bulb-63"></i>
                                <p> {{ __('Solution Types') }} </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#usermanag">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>
                        {{ __('User Management') }}
                        <b class="caret"></b>
                    </p>
                </a>

            </li>
            <ul class="nav">
                <div class="collapse hide" id="usermanag">
                    <li class="@if ($activePage=='users' ) active @endif">
                        <a href="{{ route('users.index') }}">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p> {{ __('User Management') }} </p>
                        </a>
                    </li>
                    <li class="@if ($activePage=='Roles' ) active @endif">
                        <a href="{{ route('roles.index') }}" disabled>
                            <i class="now-ui-icons business_chart-bar-32"></i>
                            <p> {{ __('Role Management') }} </p>
                        </a>
                    </li>
                    <li class="@if ($activePage=='Permissions' ) active @endif">
                        <a href="{{ route('permissions.index') }}" disabled>
                            <i class="now-ui-icons objects_key-25"></i>
                            <p> {{ __('Permissions') }} </p>
                        </a>
                    </li>
                </div>
            </ul>

            <li class="@if ($activePage=='blogs' ) active @endif">
                <a href="{{ route('blogs.index') }}">
                    <i class="now-ui-icons files_paper"></i>
                    <p> {{ __('Blogs') }} </p>
                </a>
            </li>
            {{-- @endif
            @endif --}}
        </ul>
    </div>
</div>
