<?php
if(!defined('__CONTROLLER__')) define('__CONTROLLER__', 'true');
require_once "Model/Account.php";
require_once "Model/Product.php";

class Controller{
    protected $accountObj;
    protected $productObj;

    public function __construct(){
        $this->accountObj = new Account;
        $this->productObj = new Product;
        //
        sessionInit();
        setTimeZone();
    }
}
?>