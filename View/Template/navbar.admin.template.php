<!-- Top Bar Start -->
<div class='topbar'>

    <!-- LOGO -->
    <div class='topbar-left'>
        <a href='./?site=home-admin' class='logo'>PG Watch<i class='mdi mdi-layers'></i></a>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class='navbar navbar-default' role='navigation'>
        <div class='container'>

            <!-- Navbar-left -->
            <ul class='nav navbar-nav navbar-left'>
                <li>
                    <button class='button-menu-mobile open-left waves-effect'>
                        <i class='mdi mdi-menu'></i>
                    </button>
                </li>
            </ul>

            <!-- Right(Notification) -->
            <ul class='nav navbar-nav navbar-right'>
                <li class='dropdown user-box'>
                    <a href='' class='dropdown-toggle waves-effect user-link' data-toggle='dropdown' aria-expanded='true'>
                        <img src='https://hinhanhdep.vn/wp-content/uploads/2019/07/d63b8e62f5221c7c4533.jpg' alt='user-img' class='img-circle user-img'>
                    </a>

                    <ul class='dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list'>
                        <li>
                            <h5>Hi, <?php echo "{$_SESSION['username']}"; ?></h5>
                        </li>
                        <li><a href='logout.php'><i class='ti-power-off m-r-5'></i> Logout</a></li>
                    </ul>
                </li>

            </ul> <!-- end navbar-right -->

        </div><!-- end container -->
    </div><!-- end navbar -->
</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
<div class='left side-menu'>
    <div class='sidebar-inner slimscrollleft'>

        <!--- Sidemenu -->
        <div id='sidebar-menu'>
            <ul>
                <li class='has_sub'>
                    <a href='./?site=home-admin' class='waves-effect'><i class='mdi mdi-view-dashboard'></i><span> Home </span> </a>
                </li>

                 <li class='has_sub'>
                    <a href='?site=brand-manage' class='waves-effect'><i class='mdi mdi-book-variant'></i><span> Brand </span> </a>
                </li>

                <li class='has_sub'>
                    <a href='?site=product-manage' class='waves-effect'><i class='mdi mdi-layers'></i><span> Product </span> </a>
                </li>

                <!-- <li class='has_sub'>
                    <a href='dashboard-user.php' class='waves-effect'><i class='mdi mdi-account'></i><span> Qu???n l?? t??i kho???n </span> </a>
                </li>

                <li class='has_sub'>
                    <a href='update-password.php' class='waves-effect'><i class='mdi mdi-key'></i><span> ?????i m???t kh???u </span> </a>
                </li> -->

            </ul>
        </div>
        <!-- Sidebar -->
        <div class='clearfix'></div>

        <!-- <div class='help-box'>
            <h5 class='text-muted m-t-0'>B???n c???n gi??p ????? ?</h5>
            <p class=''><span class='text-custom'></span> <br/> Minh Luong</p>
            <p class='m-b-0'><span class='text-custom'>S??? ??i???n tho???i:</span> <br/> 0968 401 809</p>
        </div> -->

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->