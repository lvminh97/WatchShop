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

<body id="home" class="wide body-light">
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
        <!-- Content area -->
        <div class="content-area">
            <div id="main">
                <!-- SLIDER -->
                <section class="page-section no-padding background-img-slider">
                    <div class="container">
                        <div id="main-slider">
                            <div class="item page text-center slide" style="background: url(assets/img/banner/bg0.jpg); background-size: cover;">
                                <div class="caption" style="background: #00000014;">
                                    <div class="container">
                                        <div class="col-md-8" style="height: 93% !important;display: table !important;text-align: left;">
                                            <div class="div-cell">
                                                <!-- Event description -->
                                                <!-- /Event description -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item page text-center slide2" style="background: url(assets/img/banner/bg1.jpg); background-size: cover;">
                                <div class="caption" style="background: #00000014;">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                                <!-- Event description -->
                                                <!-- /Event description -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /SLIDER -->
            </div>
            <!-- PAGE ABOUT -->
            <section class="page-section" id="about">
                <div class="container">
                    <div class="col-lg-6">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Introduction</span>
                        </h1>
                        <div class="row">
                            <p data-animation="fadeInUp" data-animation-delay="300" style="text-align: justify">This is demo description</p>
                            <p class="btn-row" style="margin-top: 20px;">
                                <a href="about-us.php" class="btn btn-theme btn-theme-xl scroll-to" data-animation="flipInY" data-animation-delay="200">Detail <i class="fa fa-arrow-circle-right"></i></a>
                                <!-- <a href="https://www.youtube.com/watch?v=dH3v9oOvYs0" class="btn btn-theme btn-theme-xl btn-theme-transparent" data-gal="prettyPhoto" data-animation="flipInY" data-animation-delay="400">Video gi???i thi???u</a> -->
                                <!-- <a class="btn btn-play" href="https://www.youtube.com/watch?v=dH3v9oOvYs0" data-gal="prettyPhoto"><i class="fa fa-play"></i></a> -->
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" style="padding: 35px 15px;">
                        <div class="row thumbnails">
                            <!-- <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <iframe style="width: 100%;height: 240px;border-radius: 6px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);" src="https://www.youtube.com/embed/MzEfl5V1Rhc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p style="margin-top: 10px;">M??Y L??M S???CH KH??NG KH?? AIRFREE, S???N PH???M ?????C QUY???N <br> Y T??? C?????NG M???NH</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /PAGE ABOUT -->
            <!-- Donation -->
            <!-- <section class="page-section color" style="padding: 30px 0 10px 0;background: url(assets/img/banner/bg.jpg) center center / cover;" id="donation">
                <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner" style="color: #fff !important">Gi?? tr??? c???t l??i</span>
                    </h1>
                    <p>GI???I PH??P TO??N DI???N, GI?? TR??? V???NG B???N</p>
                </div>
            </section> -->
            <!-- /Donation -->
            <!-- PAGE SCHEDULE -->
            <div style="background: url(assets/img/banner/m2.jpg) center center / cover;">
            <?php //include_once 'views/components/member.php'; ?>
            <!-- /PAGE SCHEDULE -->
            <!-- <section style="background: #0000;" class="page-section" id="price">
                <div class="container">
                    <h1 class="section-title clearfix">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner animated flipInY visible"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner animated fadeInRight visible">Th??nh t???u</span>
                    </h1>
                    <div class="row price-tables">
                        <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                            <div style="    background: #fff;" class="price-table animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="100">
                                <div class="price-table-header">
                                    <div class="price-label">
                                        <h2 class="price-label-title">?????i t??c</h2>
                                    </div>
                                    <div class="price-value">
                                        <span class="price-number">35</span>
                                        <span class="price-per"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="price-table featured animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="200">
                                <div class="price-table-header">
                                    <div class="price-label">
                                        <h2 class="price-label-title">Kh??ch h??ng</h2>
                                    </div>
                                    <div class="price-value">
                                        <span class="price-number">250</span>
                                        <span class="price-per"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="price-table animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="300">
                                <div class="price-table-header">
                                    <div class="price-label">
                                        <h2 class="price-label-title">S???n ph???m</h2>
                                    </div>
                                    <div class="price-value">
                                        <span class="price-number">3512</span>
                                        <span class="price-per"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            </div>
            

            <!-- <section class="page-section image" id="register" style="padding-top: 20px;padding-bottom: 20px;">
                <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">????ng k?? nh???n t?? v???n</span>
                    </h1>
                    <form name="registration-form" class="registration-form" action="model/add_register.php" method="post">
                        <div class="row">
                            <div class="col-sm-12 form-alert"></div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group" data-animation="fadeInUp" data-animation-delay="200">
                                    <input type="text" class="form-control input-name" data-toggle="tooltip" name="name" placeholder="T??n c???a b???n" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group" data-animation="fadeInUp" data-animation-delay="400">
                                    <input type="text" class="form-control input-email" data-toggle="tooltip" name="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group" data-animation="fadeInUp" data-animation-delay="600">
                                    <input type="text" name="phone-number" class="form-control input-phone" placeholder="S??? ??i???n tho???i" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group" data-animation="fadeInUp" data-animation-delay="200">
                                    <input type="text" class="form-control input-name" data-toggle="tooltip" name="product" placeholder="T??n s???n ph???m" />
                                </div>
                            </div>
                            <div class="col-md-12 overflowed">
                                <div class="text-center margin-top">
                                    <button class="btn btn-theme btn-theme-xl submit-button" type="submit"> ????ng k?? ngay <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section> -->

            <section class="page-section" style="padding-top: 20px;padding-bottom: 20px;">
                <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-file-text-o fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Popular products<small></small></span>
                    </h1>
                    <div class="row post-row">
                        <?php //include_once 'views/show/show_post_index.php'; ?>
                    </div>
                    <div class="text-center margin-top">
                        <!-- <a data-animation="flipInY" data-animation-delay="100" href="blogs.php" class="btn btn-theme"><i class="fa fa-file"></i> Xem th??m tin t???c</a> -->
                    </div>
                </div>
            </section>
            <!-- PAGE SPONSORS -->
            <section class="page-section" id="sponsors">
                <!-- <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-thumbs-up fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">?????i t??c li??n k???t <small></small></span>
                    </h1>
                    <div class="partners-carousel" data-animation="fadeInUp" data-animation-delay="300">
                        <div class="owl-carousel">
                            <div><a href="#"><img src="assets/img/partner/1.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/2.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/3.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/4.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/5.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/6.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/7.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/8.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/9.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/10.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/11.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/12.jpg" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/13.jpg" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="assets/img/partner/15.jpg" width="170" height="60" /></a></div>
                        </div>
                    </div>
                </div> -->
            </section>
            <!-- /PAGE SPONSORS -->        </div>
        <!-- /Content area -->
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
            theme.initMainSlider();
            theme.initPartnerSlider();
            theme.initTestimonials();
            $('#playy').click(()=>{
                $('#video').show();
                $('#playy').attr('style', 'display: none !important');
            });
            $('#video').hide();
            function remove_active() {
                $('#first').removeClass('active');
                $('#second').removeClass('active');
                $('#third').removeClass('active');
                $('#last').removeClass('active');
                $('#tab-first').removeClass('in active');
                $('#tab-second').removeClass('in active');
                $('#tab-third').removeClass('in active');
                $('#tab-last').removeClass('in active');
            }
            var hihi = setInterval(()=>{
                if ($('#first').attr('class') == 'active') {
                    remove_active();
                    $('#second').addClass('active');
                    $('#tab-second').addClass('in active');
                } else if ($('#second').attr('class') == 'active') {
                    remove_active();
                    $('#third').addClass('active');
                    $('#tab-third').addClass('in active');
                } else if ($('#third').attr('class') == 'active') {
                    remove_active();
                    $('#last').addClass('active');
                    $('#tab-last').addClass('in active');
                } else if ($('#last').attr('class') == 'active') {
                    remove_active();
                    $('#first').addClass('active');
                    $('#tab-first').addClass('in active');
                }
            },5000);
            $('#first').click(()=>{
                clearInterval(hihi);
            });
            $('#second').click(()=>{
                clearInterval(hihi);
            });
            $('#third').click(()=>{
                clearInterval(hihi);
            });
            $('#last').click(()=>{
                clearInterval(hihi);
            });
        });
        jQuery(window).load(function() {
            theme.initAnimation();
        });
    
        jQuery(window).load(function() { jQuery('body').scrollspy({ offset: 100, target: '.navigation' }); });
        jQuery(window).load(function() { jQuery('body').scrollspy('refresh'); });
        jQuery(window).resize(function() { jQuery('body').scrollspy('refresh'); });
    
        jQuery(document).ready(function() { theme.onResize(); });
        jQuery(window).load(function() { theme.onResize(); });
        jQuery(window).resize(function() { theme.onResize(); });
    
        jQuery(window).load(function() {
            if (location.hash != '') {
                var hash = '#' + window.location.hash.substr(1);
                if (hash.length) {
                    jQuery('html,body').delay(0).animate({
                        scrollTop: jQuery(hash).offset().top - 44 + 'px'
                    }, {
                        duration: 1200,
                        easing: "easeInOutExpo"
                    });
                }
            }
        });
    </script>
</body>

</html>