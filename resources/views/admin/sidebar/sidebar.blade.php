<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="#">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_profile"></i>
                    <span>Users</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('admin.users.index')}}">All Users</a></li>
                    <li><a class="" href="{{route('admin.users.create')}}">Create Users</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_desktop"></i>
                    <span>Posts</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('admin.posts.index')}}">All Posts</a></li>
                    <li><a class="" href="{{route('admin.posts.create')}}">Create Posts</a></li>

                </ul>
            </li>
            <li>
                <a class="" href="widgets.html">
                    <i class="icon_genius"></i>
                    <span>Widgets</span>
                </a>
            </li>
            <li>
                <a class="" href="chart-chartjs.html">
                    <i class="icon_piechart"></i>
                    <span>Charts</span>

                </a>

            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_table"></i>
                    <span>Tables</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="basic_table.html">Basic Table</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_documents_alt"></i>
                    <span>Pages</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="profile.html">Profile</a></li>
                    <li><a class="" href="login.html"><span>Login Page</span></a></li>
                    <li><a class="" href="blank.html">Blank Page</a></li>
                    <li><a class="" href="404.html">404 Error</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>