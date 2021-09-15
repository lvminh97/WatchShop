<?php
require_once "functions.php";
require_once "DB.php";

class Product extends DB{

	public function __construct(){
		parent::__construct();
	}

    public function getList(){

    }

    public function getItem($token){
        $tmp = $this->select("token", "*", "token='$token'");
        if(count($tmp) == 1){
            return $tmp[0];
        }
        else return null;
    }

    public function addBrand($name){
       return $this->insert("brand", array('brand_id' => "null", 'name' => $name));
    }

    public function getBrandList(){
        return $this->select("brand", "*", "1", "brand_id ASC");
    }

    public function removeBrand($brand_id){
        return $this->delete("brand", "brand_id='$brand_id'");
    }

    public function addProduct(){

    }

    public function getProductList(){
        return $this->select("product", "*", "1", "product_id ASC");
    }

    public function removeProduct($product_id){
        return $this->delete("product", "product_id='$product_id'");
    }
}
?>