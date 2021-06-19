        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                      <a href="{{url('/')}}"><img src="{{url('/').'/'.SiteSetting('logo')}}" alt="{{SiteSetting('name')}}" style="width: 100px;heigth:100px" /></a>
                    <h3>{{(Auth::user()->name)}}</h3>
                </div>

                @can(['dashboards.index'])
                    
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-home"></i> <span class="mini-dn">Dashboard</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('admin.dashboards.index')}}" class="dropdown-item">Index</a>
                            </div>
                        </li>
                    </ul>
                </div>
                
                @endcan


                @canany(['permissions.index','permissions.create'])
                    
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa fa-users" aria-hidden="true"></i> <span class="mini-dn">Permissions</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                @can('permissions.index')
                                    <a href="{{route('admin.permissions.index')}}" class="dropdown-item">Index</a>
                                @endcan
                                 @can('permissions.create')
                                    <a href="{{route('admin.permissions.create')}}" class="dropdown-item">Create</a>
                                @endcan
                            </div>
                        </li>
                    </ul>
                </div>
                
                @endcanany

                
                @canany(['roles.index','roles.create'])
                    
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa fa-user-secret" aria-hidden="true"></i> <span class="mini-dn">Roles</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                @can('roles.index')
                                    <a href="{{route('admin.roles.index')}}" class="dropdown-item">Index</a>
                                @endcan
                                 @can('roles.create')
                                    <a href="{{route('admin.roles.create')}}" class="dropdown-item">Create</a>
                                @endcan
                            </div>
                        </li>
                    </ul>
                </div>
                
                @endcanany

                @canany(['teams.index','teams.create'])
                    
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa fa-users"></i> <span class="mini-dn">Teams</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                @can('teams.index')
                                    <a href="{{route('admin.teams.index')}}" class="dropdown-item">Index</a>
                                @endcan
                                 @can('teams.create')
                                    <a href="{{route('admin.teams.create')}}" class="dropdown-item">Create</a>
                                @endcan
                            </div>
                        </li>
                    </ul>
                </div>
                
                @endcanany

                @can(['settings.index'])
                    
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa fa-cogs" aria-hidden="true"></i> <span class="mini-dn">Settings</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('admin.settings.index')}}" class="dropdown-item">Index</a>
                            </div>
                        </li>
                    </ul>
                </div>
                
                @endcan

                @canany(['users.index','users.create','users.admins','users.users','users.researcher'])
                    <div class="left-custom-menu-adp-wrap">
                        <ul class="nav navbar-nav left-sidebar-menu-pro">
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <i class="fa fa-users" aria-hidden="true"></i> <span class="mini-dn">Users</span> 
                                    <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                                </a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                    @can('users.index')
                                        <a href="{{route('admin.users.index')}}" class="dropdown-item">Index</a>
                                    @endcan
                                    @can('users.create')
                                        <a href="{{route('admin.users.create')}}" class="dropdown-item">Create</a>
                                    @endcan
                                    @can('users.users')
                                        <a href="{{route('admin.users.users')}}" class="dropdown-item">Users</a>
                                    @endcan
                                    @can('users.admins')
                                        <a href="{{route('admin.users.admins')}}" class="dropdown-item">Admins</a>
                                    @endcan
                                    @can('users.researcher')
                                        <a href="{{route('admin.users.researcher')}}" class="dropdown-item">Researcher</a>
                                    @endcan
                                </div>
                            </li>
                        </ul>
                    </div>
                @endcanany


            </nav>
        </div>