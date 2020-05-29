@section('header')
<div class="container-fluid">
    <div class="row">
        <div id="loading-bar">
            <div id="loading-line"></div>
        </div>

        <!-- Top -->
            <div class="top col-lg-12 col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="today">Today</div>
                        <div class="search">
                            <input type="text" placeholder="I'm searching for _ ">
                            <button class="glyphicon glyphicon-search"></button>
                        </div>
                        <div class="notifications">
                            <div class="alarm ">
                                <img src="<?php echo asset('images/alarm.png');?>" alt="Alarm">
                                <span class="badge">11</span>
                            </div>
                            <div class="profile">
                                <img src="<?php echo asset('images/avatar.jpg');?>" alt="Avatar" id="avatar">
                                <ul class="nav navbar-nav">
                                   <li class="dropdown">
                                        <p>Fred Barry
                                            <span class="caret"></span>
                                        </p>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Sign In</a></li>
                                            <li><a href="{{site_url('form-login')}}">Login</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        <!-- -->
        <!-- Menu -->
            <div class="navbar-div col-lg-12 col-xs-12" id="sticky-header">
                <div class="container navbar-container">
                    <div class="logo col-lg-2 col-xs-12">
                        <a href="http://zola.com:81/"><img src="<?php echo asset('images/logo.png');?>" alt="Logo"></a>
                    </div>
                    
                    <div class="menu col-lg-10 col-xs-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="btn-responsive-menu navbar-toggler btn btn-default" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="glyphicon glyphicon-align-justify"></span>
                            </button>
                            <a href="" class="logo-mobile"><img src="<?php echo asset('images/logo.png');?>" alt="Logo"></a>
                            <form class="form-search-mobile" id="form-search-mobile" method="get" accept-charset="utf-8">
                                <input type="text" name="search" placeholder="I'm searching for _ ">
                                <button class="glyphicon glyphicon-search"></button>
                            </form>
                            <button class="search-mobile glyphicon glyphicon-search" id="btn-search-mobile"></button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <nav id="menu">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{site_url('categories')}}">World</a></li>
                                        <li><a href="{{site_url('categories')}}">Politics</a></li>
                                        <li class="dropdown">
                                            <a href="{{site_url('categories')}}">Business
                                            <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Link 1</a></li>
                                                <li><a href="#">Link 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{site_url('categories')}}">Economy
                                            <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Link 1</a></li>
                                                <li><a href="#">Link 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{site_url('categories')}}">Markets
                                            <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Link 1</a></li>
                                                <li><a href="#">Link 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{site_url('categories')}}">Life & Arts</a></li>
                                        <li><a href="{{site_url('categories')}}">Sport</a></li>
                                        <li><a href="{{site_url('categories')}}">Technology</a></li>
                                    </ul>
                                </nav>  
                            </div>   
                        </nav>
                    </div>
                </div>
            </div>
        <!-- -->
    </div>      
</div>
@endsection