<div class="main-sidebar sidebar-style-3" tabindex="1" style="overflow: hidden; outline: none;">
    <aside id="sidebar-wrapper" >
        <div class="sidebar-brand bg-white d-flex justify-content-center align-items-center" style="line-height: 10px !important">
            <a href="{{url('/')}}" class="h3 m-auto"><strong><span class="text-danger">I</span><span class="text-dark">DEA</span></strong></a>

                <small class="text-grey p-3" >Industrial Developement <br>
                 <span class="text-warning h6">{{'&'}}</span>
                 Engineering Associates</small>

        </div>
        <div class="sidebar-brand sidebar-brand-sm" style="line-height: auto !important">
            <a href="{{url('/')}}" class="h5"><strong><span class="text-danger">I</span><span class="text-dark">DEA</span></strong></a>

        </div>
        <ul class="sidebar-menu ">
            <li class="menu-header">Navigation</li>
            <li><a class="nav-link" href="{{url('/')}}"><i class="far fa-square"></i> <span>Board</span></a></li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Tasks</span></a>
                <ul class="dropdown-menu" style="display: none;">
                <li class="menu-sub-header">View</li>

                    <li><a class="nav-link" href="layout-default.html">My Projects</a></li>

                    <li><a class="nav-link" href="layout-top-navigation.html">My Tasks</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>User and Roles</span></a>
                <ul class="dropdown-menu" style="display: none;">
                <li class="menu-sub-header">Auth</li>

                    <li><a class="nav-link" href="{{url('users/show')}}">Users</a></li>

                    <li><a class="nav-link" href="{{url('roles/show')}}">Roles</a></li>
                    <li><a class="nav-link" href="{{url('permission/show')}}">Permission</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{url('task/show')}}"><i class="far fa-square"></i> <span>Task Manager</span></a></li>

        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getcodiepie.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i>Feedback</a>
        </div>
    </aside>
</div>