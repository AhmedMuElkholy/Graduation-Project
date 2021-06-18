        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                      <a href="{{url('/')}}"><img src="{{url('/').'/'.SiteSetting('logo')}}" alt="{{SiteSetting('name')}}" style="width: 100px;heigth:100px" /></a>
                    <h3>{{(Auth::user()->name)}}</h3>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-users"></i> <span class="mini-dn">Users</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('admin.users.index')}}" class="dropdown-item">Index</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-users"></i> <span class="mini-dn">Team Members</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('admin.team-members.index')}}" class="dropdown-item">Index</a>
                                <a href="{{route('admin.team-members.create')}}" class="dropdown-item">create</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-users"></i> <span class="mini-dn">Clients</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('admin.clients.index')}}" class="dropdown-item">Index</a>
                                <a href="{{route('admin.clients.create')}}" class="dropdown-item">create</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-inbox"></i> <span class="mini-dn">Subscribe</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('admin.subscribes.index')}}" class="dropdown-item">Index</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-phone"></i> <span class="mini-dn">Contact us</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('admin.contactuses.index')}}" class="dropdown-item">Index</a>
                            </div>
                        </li>
                    </ul>
                </div>

                  <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-cog"></i> <span class="mini-dn">Settings</span> 
                                <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('admin.settings.index')}}" class="dropdown-item">Index</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>