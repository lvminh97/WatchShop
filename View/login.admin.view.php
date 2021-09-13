<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng nhập | Cuong Manh Group</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='description' content='A fully featured admin theme which can be used to build CRM, CMS, etc.'>
        <meta name='author' content='Coderthemes'>

        <!-- App favicon -->
        <link rel='shortcut icon' href='../views/assets/img/favicon.png'>
        <!-- App title -->
        <!-- Summernote css -->
        <link href='plugins/summernote/summernote.css' rel='stylesheet' />

        <!-- Select2 -->
        <link href='plugins/select2/css/select2.min.css' rel='stylesheet' type='text/css' />

        <!-- Jquery filer css -->
        <link href='plugins/jquery.filer/css/jquery.filer.css' rel='stylesheet' />
        <link href='plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css' rel='stylesheet' />

        <!-- App css -->
        <link href='assets/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/core.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/components.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/icons.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/pages.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/menu.css' rel='stylesheet' type='text/css' />
        <link href='assets/css/responsive.css' rel='stylesheet' type='text/css' />
        <link rel='stylesheet' href='plugins/switchery/switchery.min.css'>

        <script src='assets/js/modernizr.min.js'></script> 
    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box" style="background-color: #ffffff;">
                                    <h2 class="text-uppercase">
                                        <a href="/index.php" class="text-success">
                                            <span><img src="../views/assets/img/logo.png" alt="" height="100"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="POST" action="../model/login_model.php">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" name="username" required="" placeholder="Tên đăng nhập">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" required="" placeholder="Mật khẩu">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox" checked>
                                                    <label for="checkbox-signup">
                                                        Nhớ đăng nhập
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                                <a href="https://www.facebook.com/namhong1412" class="text-muted"><i class="fa fa-lock m-r-5"></i> Bạn quên mật khẩu?</a>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">Đăng nhập</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                          <!--   <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div> -->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>