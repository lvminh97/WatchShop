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

    public function addItem($user_id){
       
    }
}
?>