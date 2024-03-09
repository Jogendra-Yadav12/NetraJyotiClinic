 <!-- PAGE CONTAINER
    ================================================== -->
    <div class="page-container">

        <!-- PAGE SIDEBAR
        ================================================== -->
        <div class="page-sidebar">
            <a class="logo-box" href="index.html">
                <img src="../img/logos/logo-footer.png" alt="...">
                <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                <i class="icon-close" id="sidebar-toggle-button-close"></i>
            </a>
            <div class="page-sidebar-inner">
                <div class="page-sidebar-menu">
                    <ul class="accordion-menu">
                        <li>
                            <a href="{{url('super')}}"> <i class="menu-icon icon-home4"></i><span>Dashboard</span> </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="menu-icon icon-inbox"></i><span>Category</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="{{url('category')}}">Category</a></li>
                                <li><a href="{{url('addCategory')}}">Add Categories</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="menu-icon icon-layers"></i><span>Products</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="{{url('product')}}">Products</a></li>
                                <li><a href="{{url('addProduct')}}">Add Products</a></li>
                            </ul>
                        </li>
                        <li>
                        <a href="{{url('order')}}"> <i class="menu-icon icon-code"></i><span>Orders</span> </a>
                        </li>
                        <li>
                            <a href="{{url('customer')}}"> <i class="menu-icon icon-code"></i><span>Customers</span> </a>
                        </li>
                        
                        <li class="menu-divider"></li>
                        <li>
                            <a href="#"> <i class="menu-icon icon-public"></i><span>Logout</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

         <!-- PAGE CONTENT
        ================================================== -->
        <div class="page-content">

            <!-- PAGE HEADER
            ================================================== -->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo-sm">
                                <a href="#" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                <a class="logo-box" href="index.html"><img src="../img/logos/logo.png" class="logo" alt="..."></a>
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="fa fa-angle-down"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="#" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                <li><a href="#" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                <li><a href="#" id="search-button"><i class="fa fa-search"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                    <ul class="dropdown-menu dropdown-lg dropdown-content">
                                        <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                        <li class="slimscroll dropdown-notifications">
                                            <ul class="list-unstyled dropdown-oc">
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i class="far fa-image"></i></span>
                                                        <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                            <small class="notification-date">20:00</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                        <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                            <small class="notification-date">06:07</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                        <span class="notification-info">4 new special offers from the apps you follow!
                                                            <small class="notification-date">Yesterday</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                        <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                            <small class="notification-date">Yesterday</small>
                                                        </span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/avatars/user-dropdown.jpg" alt="..." class="rounded-circle"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Calendar</a></li>
                                        <li><a href="#"><span class="badge float-end badge-danger">42</span>Messages</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Account Settings</a></li>
                                        <li><a href="#">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>