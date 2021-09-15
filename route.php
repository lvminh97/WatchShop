<?php
    require_once "Controller/Route.php";
    $route = new Route("ViewController@getIndex");
    // Dang ky tai khoan
    // $route->get("site", "signup", "ViewController@getSignupPage");
    // $route->post("action", "signup", "AccountController@signupAction");
    // Dang nhap
    $route->get("site", "login", "ViewController@getLoginPage");
    $route->post("action", "login", "AccountController@loginAction");
    $route->get("action", "login", "ViewController@getIndex");
    $route->get("action", "logout", "AccountController@logoutAction");
    /// VIEW FOR CUSTOMER
    $route->get("site", "product_list", "ViewController@getProductListForCustomerPage");
    $route->get("site", "product", "ViewController@getProductForCustomerPage");

    // VIEW FOR ADMIN
    $route->get("site", "admin", "ViewController@getLoginForAdminPage");
    $route->get("site", "home-admin", "ViewController@getHomeForAdminPage");
    $route->get("site", "brand-manage", "ViewController@getBrandManagePage");
    $route->get("site", "product-manage", "ViewController@getProductManagePage");

    //// ACCOUNT API
    $route->post("api", "get_user_infor", "AccountController@getUserInfor");
    $route->post("api", "update_user_infor", "AccountController@updateUserInfor");
    $route->post("api", "change_password", "AccountController@changePassword");
    $route->post("api", "search_host", "AccountController@searchHostAction");
    $route->post("api", "delete_host", "AccountController@deleteHostAction");
    //// PRODUCT API
    $route->post("api", "add_product", "ProductController@addProductAction");
    // $route->get("api", "get_room", "RoomController@getRoomAction");
    // $route->post("api", "get_room_list", "RoomController@getRoomListAction");
    // $route->post("api", "update_room", "RoomController@updateRoomAction");
    $route->post("api", "delete_product", "ProductController@deleteProductAction");
    //// BRAND API
    $route->post("api", "add_brand", "PostController@addBrandAction");
    // $route->get("api", "get_post", "PostController@getPostAction");
    // $route->post("api", "get_post_list", "PostController@getPostListAction");
    // $route->post("api", "update_post", "PostController@updatePostAction");
    // $route->post("api", "delete_post", "PostController@deletePostAction");
    // $route->post("api", "approve_post", "PostController@approvePostAction");

    $route->process();
?>