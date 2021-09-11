<!DOCTYPE html>
<html lang="en">
<head>
    <?php getTemplate("header") ?>
    <title>PhamGia Watch</title>
    <style>
        h2 {
            font-size: 16px;
        }
        .price-value {
            font-size: 20px;
        }
    </style>
</head>

<body id="home" class="wide body-light sub-page">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- Wrap all content -->
    <div class="wrapper">
        <!-- HEADER -->
        <?php getTemplate("navbar") ?>
        <!-- /HEADER -->
        <div class="banner-top" style="height: 210px;">
            <h1>TIN TỨC - SỰ KIỆN Y TẾ</h1>
        </div>
        <!-- Content area -->
        <div class="content-area">
            <!-- PAGE BLOG -->
            <section class="page-section with-sidebar sidebar-right">
                <div class="container">
                    <div class="row">
                        <!-- Sidebar -->
                        <aside id="sidebar" class="sidebar col-sm-4 col-md-3">
                            <div class="widget categories">
                                <h4 class="widget-title">Category</h4>
                                <ul>
                                    <li><a href="blogs-kind.php?id=1">Category 1</a></li>
                                    <li><a href="blogs-kind.php?id=2">Category 2</a></li>
                                </ul>
                            </div>
                        </aside>
                        <!-- Sidebar -->
                        <!-- Content -->
                        <section id="content" class="content col-sm-8 col-md-9">
                            <div class="content col-sm-12 col-md-6" style="margin-bottom: 50px;">
                                <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="100">
                                    <div class="post-media" style="background: url('.$row['avatar'].') center center / cover;height: 272px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);"></div>
                                    <div class="post-header">
                                        <h2 class="post-title"><a href="bai-viet-'.utf8tourl($row['name_post']).'-'.$row['id_post'].'.html">'.$row['name_post'].'</a></h2>
                                        <div class="post-meta">
                                            <span class="post-date">
                                                Đăng ngày '.$row['date'].'
                                            </span>
                                        </div>
                                    </div>
                                    <div class="post-body">
                                        <div class="post-excerpt">
                                            <p>'.$row['description_n'].'</p>
                                        </div>
                                    </div>
                                    <div class="post-footer">
                                        <span class="post-readmore">
                                            <a href="bai-viet-'.utf8tourl($row['name_post']).'-'.$row['id_post'].'.html" class="btn btn-theme btn-theme-transparent">Đọc tiếp</a>
                                        </span>
                                    </div>
                                </article>
                            </div>
                        </section>
                        <!-- Content -->
                        <hr class="page-divider transparent visible-xs" />
                    </div>
                </div>
            </section>
            <!-- /PAGE BLOG -->
        </div>
        <!-- /Content area -->
        <!-- FOOTER -->
        <?php getTemplate("footer") ?>
    </div>
    <!-- /Wrap all content -->
    <!-- JS Global -->
    <!--[if lt IE 9]><script src="views/assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="assets/plugins/jquery/jquery-2.1.1.min.js"></script>
    <!--<![endif]-->
    <script src="assets/plugins/modernizr.custom.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/plugins/superfish/js/superfish.js"></script>
    <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script src="assets/plugins/placeholdem.min.js"></script>
    <script src="assets/plugins/jquery.smoothscroll.min.js"></script>
    <script src="assets/plugins/jquery.easing.min.js"></script>
    <!-- JS Page Level -->
    <script src="assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <!--[if (gte IE 9)|!(IE)]><!-->
    <!--<![endif]-->
    <script type="text/javascript">
    jQuery(document).ready(function() {
        theme.init();
    });
    </script>
</body>

</html>