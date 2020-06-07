<!DOCTYPE html>
<html>
    <head>
        <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 4.4
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Zola Admin - {{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" sizes="140x140" href="{{asset('images/logo-ZL.png')}}" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="{{asset('images/logo-ZL.png')}}">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/logo-ZL.png')}}">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('admin/images/apple-touch-icon-72-precomposed.png')}}">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('admin/images/apple-touch-icon-144-precomposed.png')}}">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="{{asset('admin/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/plugins/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/css/animate.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="{{asset('admin/plugins/morris-chart/css/morris.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/jquery-ui/smoothness/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/rickshaw-chart/css/graph.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/rickshaw-chart/css/detail.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/rickshaw-chart/css/legend.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/rickshaw-chart/css/extensions.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/rickshaw-chart/css/rickshaw.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/rickshaw-chart/css/lines.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.1.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{asset('admin/plugins/icheck/skins/minimal/white.css')}}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body><!-- START TOPBAR -->
        <div class="page-topbar">
            <div class="logo-area"></div>
            <div class="quick-area">
                <div class="pull-left">
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap">
                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="message-toggle-wrapper">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-primary">7</span>
                            </a>

                        </li>
                        <li class="notify-toggle-wrapper">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-orange">3</span>
                            </a>
                            <ul class="dropdown-menu notifications animated fadeIn">
                                <li class="total">
                                    <span class="small">
                                        You have <strong>3</strong> new notifications.
                                        <a href="javascript:;" class="pull-right">Mark all as Read</a>
                                    </span>
                                </li>
                                <li class="list">

                                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server needs to reboot</strong>
                                                        <span class="time small">15 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="unread away"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>45 new messages</strong>
                                                        <span class="time small">45 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server IP Blocked</strong>
                                                        <span class="time small">1 hour ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>10 Orders Shipped</strong>
                                                        <span class="time small">5 hours ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>New Comment on blog</strong>
                                                        <span class="time small">Yesterday</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Great Speed Notify</strong>
                                                        <span class="time small">14th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Team Meeting at 6PM</strong>
                                                        <span class="time small">16th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external">
                                    <a href="javascript:;">
                                        <span>Read All Notifications</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-sm hidden-xs searchform">
                            <div class="input-group">
                                <span class="input-group-addon input-focus">
                                    <i class="fa fa-search"></i>
                                </span>
                                <form action="search-page.html" method="post">
                                    <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                                    <input type='submit' value="">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>		
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="{{asset($listUser['avatar'])}}" alt="{{$listUser['name']}}" class="img-circle img-inline">
                                <span> {{$listUser['name']}} <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">
                                <li>
                                    <a href="#settings">
                                        <i class="fa fa-wrench"></i>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#profile">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#help">
                                        <i class="fa fa-info"></i>
                                        Help
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="{{site_url('logout')}}">
                                        <i class="fa fa-lock"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="chat-toggle-wrapper">
                            <a href="#" data-toggle="chatbar" class="toggle_chat">
                                <i class="fa fa-comments"></i>
                                <span class="badge badge-warning">9</span>
                                <i class="fa fa-times"></i>
                            </a>
                        </li>
                    </ul>			
                </div>		
            </div>
        </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">
            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">

                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a href="ui-profile.html">
                                <img src="{{asset($listUser['avatar'])}}" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">
                            <h3>
                            <a href="">
                                {{$listUser['name']}}
                            </a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Administrator</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>	


                        <li class=""> 
                            <a href="index-blog.html">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="Posts"> 
                            <a href="javascript:;">
                                <i class="fa fa-edit"></i>
                                <span class="title">Posts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{site_url('admin/list-posts')}}" >All Posts</a>
                                </li>
                                <li>
                                    <a class="" href="{{site_url('admin/add-post')}}" >Add Post</a>
                                </li>
                            </ul>
                        </li>
                        <li class="Search"> 
                            <a href="blo-search.html">
                                <i class="fa fa-search"></i>
                                <span class="title">Search</span>
                            </a>
                        </li>
                        <li class="Categories"> 
                            <a href="javascript:;">
                                <i class="fa fa-sitemap"></i>
                                <span class="title">Categories</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="blo-categories.html" >All Categories</a>
                                </li>
                                <li>
                                    <a class="" href="blo-category-add.html" >Add Category</a>
                                </li>
                                <li>
                                    <a class="" href="blo-category-edit.html" >Edit Category</a>
                                </li>
                            </ul>
                        </li>
                        <li class="Users"> 
                            <a href="javascript:;">
                                <i class="fa fa-user"></i>
                                <span class="title">Users</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="blo-users.html" >All Users</a>
                                </li>
                                <li>
                                    <a class="" href="blo-user-add.html" >Add User</a>
                                </li>
                                <li>
                                    <a class="" href="blo-user-edit.html" >Edit User</a>
                                </li>
                                <li>
                                    <a class="" href="blo-user-profile.html" >User Profile</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
                <!-- MAIN MENU - END -->



                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>New&nbsp;Users</span>
                            <span class='total'>245</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2">
                        <div class="data">
                            <span class='title'>Subscribers</span>
                            <span class='total'>990</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>

                </div>
            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content">
                <li>
                    <p class="text-center" style="padding-top: 15px;">Xin chào 
                        <span style="color: red"><?php echo $this->session->userdata('login');?></span>
                    </p>
                </li>

                @yield('homeAdmin')
                @yield('listPosts')
                @yield('addPost')
                @yield('editPost')

                
            </section>
            <!-- END CONTENT -->


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="{{asset('admin/js/jquery-1.11.2.min.js')}}" type="text/javascript"></script> 
        <script src="{{asset('admin/js/jquery.easing.min.js')}}" type="text/javascript"></script> 
        <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script> 
        <script src="{{asset('admin/plugins/pace/pace.min.js')}}" type="text/javascript"></script>  
        <script src="{{asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}" type="text/javascript"></script> 
        <script src="{{asset('admin/plugins/viewport/viewportchecker.js')}}" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="{{asset('admin/plugins/rickshaw-chart/vendor/d3.v3.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/plugins/jquery-ui/smoothness/jquery-ui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/plugins/rickshaw-chart/js/Rickshaw.All.js')}}"></script>
        <script src="{{asset('admin/plugins/sparkline-chart/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/plugins/easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/plugins/icheck/icheck.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="{{asset('admin/js/scripts.js')}}" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="{{asset('admin/plugins/sparkline-chart/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/js/chart-sparkline.js')}}" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>





<script type="text/javascript">


</script>