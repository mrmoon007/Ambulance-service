<!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('dashboard') }}">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('admin.service.index') }}">
                                    <span class="nav-text">Services</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.backend.about') }}">
                                    <span class="nav-text">About</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.slider.index') }}">
                                    <span class="nav-text">Slider</span>

                                    {{-- <span class="badge badge-success">new</span> --}}

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.backend.portfolioIndex') }}">
                                    <span class="nav-text">Portfolio</span>

                                    {{-- <span class="badge badge-success">new</span> --}}

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-settings"></i>
                        <span class="nav-text">Site Settings</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                        <div class="sub-menu">


                            <li class="has-sub">
                                <a class="sidenav-item-link" href="{{ route('admin.backend.social.media') }}"
                                     aria-expanded="false" aria-controls="components">
                                    <span >Social Media</span>
                                </a>

                            </li>

                            <li class="has-sub">
                                <a class="sidenav-item-link" href="{{ route('admin.contact.index') }}" 
                                     aria-expanded="false" aria-controls="icons">
                                    <span class="nav-text">Contact</span> 
                                </a>
                                
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                        aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-settings"></i>
                        <span class="nav-text">User Settings</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.backend.profile') }}">
                                    <span class="nav-text">User Profile</span>

                                </a>
                            </li>

                            <li class="has-sub">
                                <a class="sidenav-item-link" href="{{ route('admin.backend.password') }}" 
                                    aria-expanded="false" aria-controls="authentication">
                                    <span class="nav-text">Change Password</span>
                                </a>
                                
                            </li>

                            <li class="has-sub">
                                <a class="sidenav-item-link" href="{{ route('admin.backend.logout') }}" 
                                     aria-expanded="false" aria-controls="others">
                                    <span class="nav-text">Logout</span>
                                </a>
                                
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</aside>
