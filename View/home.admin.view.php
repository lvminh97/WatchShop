<?php 
    //include_once '../views/show/statistic.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administrator</title>
        <!-- App favicon -->
        <link rel='shortcut icon' href='assets/img/favicon.png'>
        <!-- App title -->
        <!-- Summernote css -->
        <link href='assets/plugins/summernote/summernote.css' rel='stylesheet' />

        <!-- Select2 -->
        <link href='assets/plugins/select2/css/select2.min.css' rel='stylesheet' type='text/css' />

        <!-- Jquery filer css -->
        <link href='assets/plugins/jquery.filer/css/jquery.filer.css' rel='stylesheet' />
        <link href='assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css' rel='stylesheet' />

        <!-- App css -->
        <link href='assets/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/core.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/components.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/icons.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/pages.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/menu.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/responsive.css' rel='stylesheet' type='text/css' />
        <link rel='stylesheet' href='assets/plugins/switchery/switchery.min.css'>

        <script src='assets/js/modernizr.min.js'></script> 
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <?php getTemplate("navbar.admin") ?> 
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Administrator</h4>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <?php getTemplate("footer.admin") ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!-- Dashboard init -->
        <script src="assets/js/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>