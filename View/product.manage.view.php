<?php 
    //include_once '../views/show/statistic.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administrator</title>
        <?php getTemplate("header.admin") ?>
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
                                    <h4 class="page-title">Product Manage</h4>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#" class="btn btn-danger btn-bordered waves-effect w-md waves-light m-b-20" data-animation="fadein" data-toggle="modal" data-target="#add-product-modal">
                                    <i class="fa fa-plus"></i> Add new</a>
                            </div><!-- end col -->
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th width="10%">ID</th>
                                                <th width="20%">Image</th>
                                                <th width="30%">Name</th>
                                                <th width="15%">Price</th>
                                                <th width="15%"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="product-list">
                                        <?php
                                        $no = 1;
                                        foreach($viewParams['productList'] as $product) { ?>
                                            <tr id="<?php echo $product["product_id"] ?>">
                                                <td><?php echo $product["product_id"] ?></td>
                                                <td></td>
                                                <td><?php echo $product['name'] ?></td>
                                                <td><?php echo $product['price']." VND"; ?></td>
                                                <td>
                                                    <button class="btn btn-primary" onclick="window.location.href='?link=manage-room-detail&id='+this.parentElement.parentElement.id"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-warning" data-toggle="modal" data-target="#updateRoomModal" onclick="loadRoom(this)"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" onclick="deleteProduct(this)"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php 
                                        } ?>
                                        </tbody>
                                    </table>
                                    <?php getModal("product.add", $viewParams) ?>
                                </div>
                            </div>
                        </div>
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