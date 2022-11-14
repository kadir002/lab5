<?php
 require_once "models/productos.php";
class product_Controller{
    public static function viewsproduct(){
        $titulo="productos";

        if(isset($_POST['id_producto'])){
      $product=new productos($_POST['id_producto'],"","","","");
     $data= $product->searchProduct($_POST['id_producto']);
  
     
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/product/index.php";
            require_once "views/templates/footer.php";
        }else{
           
            $product=new productos("","","","","");
        $data= $product->searchProduct("");
    
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/product/index.php";
            require_once "views/templates/footer.php";
        }
    }

    
}