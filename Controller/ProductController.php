<?php 
require_once "Controller/Controller.php";
class ProductController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function addProductAction($data, $files){
        $resp = array('code' => "");
        if($this->accountObj->checkLoggedIn() == "Role_None"){
            $resp['code'] = "Not_Authorize";
        }
        else{
            if($this->productObj->addProduct($data, $files) === true){
                $resp['code'] = "OK";
            }
        }
        return $resp;
    }

    public function deleteProductAction($data){
        $resp = array('code' => "");
        if($this->accountObj->checkLoggedIn() == "Role_None"){
            $resp['code'] = "Not_Authorize";
        }
        else{
            if($this->productObj->removeProduct($data['product_id']) === true){
                $resp['code'] = "OK";
            }
        }
        return $resp;
    }
}
?>