 <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="/" class="logo"><span>CHESSV<i class="glyphicon glyphicon-bishop"></i>CKY</span></a>
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

                                      
                                    </li>
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
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Subscribe</a></li>
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
                                    <a href="{{ url('/home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/favourites') }}">Favourites</a>
                                </li>
                                <li>
                                    <a href="{{ url('/explore') }}">Explore</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"></i>Library</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ url('/courses') }}">Courses</a>
                                </li>
                                <li>
                                    <a href="{{ url('/videos') }}">Videos</a>
                                </li>
                                <li>
                                    <a href="{{ url('/books') }}">Books</a>
                                </li>
                                <li>
                                    <a href="{{ url('/tutorials') }}">Tutorials</a>
                                </li>
                            </ul>
                        </li>


                        <li class="has-submenu ">
                            <a href="#"></i>Articles</a>
                              <ul class="submenu">
                                <li>
                                    <a href="{{ url('/articles/') }}">All Articles</a>
                                </li>
                                <li>
                                    <a href="{{ url('/articles/type:premium') }}">Premium</a>
                                </li>
                                <li>
                                    <a href="{{ url('/articles/type:starred') }}">Starred</a>
                                </li>
                                <li>
                                    <a href="{{ url('/articles/type:trending') }}">Trending</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"></i>Challenges</a>
                              <ul class="submenu">
                                <li>
                                    <a href="{{ url('/courses') }}">Daily Challenges</a>
                                </li>
                                <li>
                                    <a href="{{ url('/videos') }}">Premium Challenges</a>
                                </li>
                                <li>
                                    <a href="{{ url('/books') }}">My Scorecard</a>
                                </li>
                                <li>
                                    <a href="{{ url('/tutorials') }}">Leaderboard</a>
                                </li>
                            </ul>
                        </li>

                         <li class="">
                           @if(Auth::user()->isIdol())
                            <a href="{{ url('/conversations') }}"></i>Conversations</a>
                          @else
                            <a href="{{ url('/superidols') }}"></i>Super Idols</a>  
                          @endif    
                        </li>


                        <li class="has-submenu">
                            <a href="#"></i>Forum</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ url('/courses') }}">List All Conversations</a>
                                </li>
                                <li>
                                    <a href="{{ url('/videos') }}">Start New Conversation</a>
                                </li>
                                <li>
                                    <a href="{{ url('/books') }}">My Conversations</a>
                                </li>
                                <li>
                                    <a href="{{ url('/tutorials') }}">Trending Conversations</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"></i>Online Chess</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ url('/courses') }}">New Game</a>
                                </li>
                                <li>
                                    <a href="{{ url('/videos') }}">Challenge Friend</a>
                                </li>
                                <li>
                                    <a href="{{ url('/books') }}">Tournaments</a>
                                </li>
                                <li>
                                    <a href="{{ url('/tutorials') }}">Leaderboard</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"></i>More</a>
                            <ul class="submenu">
                                <li><a href="ecommerce-dashboard.html"> Quizzes</a></li>
                                <li><a href="ecommerce-products.html"> References</a></li>
                                <li><a href="ecommerce-product-detail.html"> Analysis Tools</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End navigation menu        -->
                </div>
            </div>
            </div>
        </header>
        <!-- End Navigation Bar-->