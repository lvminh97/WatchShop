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

    public function addProduct($data, $files){
        $images = "";
        if(isset($files["image"])){
            $image_name = time();
			for($i = 0; $i < count($files["image"]["name"]); $i++){
				if($images != "") $images .= ";";
				$img_type = pathinfo(basename($files["image"]["name"][$i]), PATHINFO_EXTENSION);
				$img_name = $image_name.".".$img_type;
				$images .= $img_name;
				move_uploaded_file($files["image"]["tmp_name"][$i], "./Resource/Images/".$img_name);
                $image_name++;
			}
		}
        return $this->insert("product", array('product_id' => "null",
                                                'name' => $data['name'],
                                                'price' => $data['price'],
                                                'brand_id' => $data['brand_id'],
                                                'description' => $data['description'],
                                                'summary' => "",
                                                'brand' => "",
                                                'country' => $data['country'],
                                                'code' => $data['code'],
                                                'views' => '0',
                                                'popular' => '0',
                                                'images' => $images));
    }

    public function getProductList(){
        return $this->select("product", "*", "1", "product_id ASC");
    }

    public function removeProduct($product_id){
        return $this->delete("product", "product_id='$product_id'");
    }
}
?>