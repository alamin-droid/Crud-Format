<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">
                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left">
                                <img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt="">
                            </a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Victoria Baker</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                </div>
                            </div>
                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#">
                                            <i class="icon-cog3"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->
                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">
                            <!-- Main -->
                            <li class="navigation-header">
                                <span>Main</span>
                                <i class="icon-menu" title="Main pages"></i>
                            </li>
                            <li class="@yield('active_bar')">
                                <a href="/dashboard_demo">
                                    <i class="icon-home4"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-people"></i>
                                    <span>User pages</span>
                                </a>
                                <ul>
                                    <li class="@yield('active_user_bar')">
                                        <a href="{{route('user.create')}}"> Add New User </a>
                                    </li>
                                    <li class="@yield('active_user_bar')">
                                        <a href="{{route('user.index')}}">Active User</a>
                                    </li>
                                    <li>
                                        <a href="user_pages_profile.html">All User</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bi bi-book"></i>
                                    <span>Library</span>
                                </a>
                                <ul>
                                    <li class="@yield('active_library_bar')">
                                        <a href="{{route('library.create')}}">
                                            <i class="bi bi-person-plus"></i>
                                            <span> Student Registry</span>
                                        </a>
                                    </li>
                                    <li class="@yield('active_library_bar')">
                                        <a href="{{route('library.index')}}">
                                            <i class="bi bi-person-square"></i>
                                            <span>Registered Student's</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="bi bi-book-half"></i>
                                            <span>Library Book's</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Office Management</span>
                                </a>
                                <ul>
                                    <li class="@yield('active_employee_bar')">
                                        <a href="{{route('employee.create')}}">
                                            <i class="bi bi-person-plus"></i>
                                            <span>Employee singUp</span>
                                        </a>
                                    </li>
                                    <li class="@yield('active_employee_bar')">
                                        <a href="{{route('employee.index')}}">
                                            <i class="bi bi-person-square"></i>
                                            <span>Employee list</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="bi bi-book-half"></i>
                                            <span>Blank item</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Bank Management</span>
                                </a>
                                <ul>
                                    <li class="@yield('active_bank_bar')">
                                        <a href="{{route('bank.create')}}">
                                            <i class="bi bi-person-plus"></i>
                                            <span>Create Client</span>
                                        </a>
                                    </li>
                                    <li class="@yield('active_bank_bar')">
                                        <a href="{{route('bank.index')}}">
                                            <i class="bi bi-person-square"></i>
                                            <span>Client list</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="bi bi-book-half"></i>
                                            <span>Blank item</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


