 <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="/" class="logo"><span>CHESSV<i class="glyphicon glyphicon-bishop"></i>CKY</span><span class="text-small text-danger lead">Admin</span></a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-bell-o" style="font-size:18px;"></i> <span class="badge badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                    <li class="list-group nicescroll notification-list">
                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond fa-2x text-primary"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>

                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-cog fa-2x text-custom"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>

                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-bell-o fa-2x text-danger"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">Updates</h5>
                                                <p class="m-0">
                                                    <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>

                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-user-plus fa-2x text-info"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">New user registered</h5>
                                                <p class="m-0">
                                                    <small>You have 10 unread messages</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>

                                       
                                    
                                    <li>
                                        <a href="javascript:void(0);" class="list-group-item text-right">
                                            <small class="font-600">See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="http://coderthemes.com/ubold_1.5/menu_2/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/profile') }}"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="{{ url('/settings') }}"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Billing</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>
            <!-- End topbar -->


            <!-- Navbar Start -->
            <div class="navbar-custom">
                <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu active">
                            <a href="#"></i>Dashboard</a>
                            <ul class="submenu">
                                <li>
                                    <a href="/admin">Home</a>
                                </li>
                                <li>
                                    <a href="/admin/metrics">Metrics</a>
                                </li>
                                <li>
                                    <a href="/admin/users">Users</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"></i>Library</a>
                            <ul class="submenu">
                                <li><a href="/admin/courses">Courses</a></li>
                                <li><a href="/admin/videos">Videos</a></li>
                                <li><a href="/admin/books">Books</a></li>
                                <li><a href="/admin/tutorials">Tutorials</a></li>
                               
                            </ul>
                        </li>


                        <li class="has-submenu ">
                            <a href="#"></i>Articles</a>
                             <ul class="submenu">
                                <li><a href="/admin/articles">List All Articles</a></li>
                                <li><a href="/admin/articles/new">Write New Article</a></li>
                               
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"></i>Super Idols</a>
                            <ul class="submenu">
                                <li><a href="/admin/superidols/conversations">List Conversations</a></li>
                                <li><a href="/admin/superidols">Manage Idols</a></li>
                               
                            </ul>
                        </li>


                        <li class="has-submenu">
                            <a href="#"></i>Forum</a>
                            <ul class="submenu">
                                <li><a href="/admin/forum/conversations">List Conversations</a></li>
                                <li><a href="/admin/superidols">Manage Idols</a></li>
                               
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"></i>Online Chess</a>
                            <ul class="submenu">
                                <li><a href="/admin/games/ongoing"> Ongoing Games </a></li>
                                <li><a href="/admin/games/history"> Games History </a></li>
                                <li><a href="/admin/games/tournaments"> Tournaments </a></li>
                                <li><a href="/admin/leaderboards"> Leaderboards </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"></i>More</a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                   <a href="#"> Quizzes</a>
                                   <ul class="submenu">
                                    <li><a href="/admin/quiz"> List All Quizzes </a></li>
                                    <li><a href="/admin/quiz/new"> Create New Quiz </a></li>
                                    <li><a href="/admin/quiz/categories"> Manage Categories </a></li>
                                </ul>
                                </li>
                                 <li class="has-submenu">
                                   <a href="#"> Challenges</a>
                                   <ul class="submenu">
                                    <li><a href="/admin/challenges/daily"> Daily Challenges </a></li>
                                    <li><a href="/admin/challenges/weekly"> Weekly Challenges </a></li>
                                </ul>
                                </li>

                                <li class="has-submenu">
                                   <a href="#"> Resources</a>
                                   <ul class="submenu">
                                    <li><a href="/admin/challenges/daily"> References </a></li>
                                    <li><a href="/admin/challenges/weekly"> Ebooks &amp; Books </a></li>
                                    <li><a href="/admin/challenges/weekly"> Analytics Tools &amp; Softwares </a></li>
                                </ul>
                                </li>

                                 <li class="has-submenu">
                                   <a href="#"> Extra</a>
                                   <ul class="submenu">
                                    <li><a href="/admin/course/categories"> Course Categories </a></li>
                                    <li><a href="/admin/books/categories"> Books Categories </a></li>
                                    <li><a href="/admin/forum/topics"> Forum Topics </a></li>
                                </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End navigation menu        -->
                </div>
            </div>
            </div>
        </header>
        <!-- End Navigation Bar-->