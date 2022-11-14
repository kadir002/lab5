<link rel="stylesheet" href="/assets/style.css">
<section class="section-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h3>Featured Product</h3>
                    <h2>Popular Products</h2>
                    <?php $controller = Security::encode("product");
                    $method = Security::encode("viewsproduct"); ?>
                    <form action="<?php echo "index.php?c=" . $controller . "&m=" . $method . "" ?>" method="post">
                        <div class="d-flex">


                            <input name="id_producto" class="form-control form-control-lg" type="text" placeholder="search" aria-label=".form-control-lg example">


                            <button type="submit" class="btn btn-primary mx-2">buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php if(isset($data)){ 
         
            ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-1" class="single-product">
                    <div class="part-1">
                        <ul>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="part-2">
                    <h3 class="product-title"><?php echo $data['descripcion'] ?></h3>
                    <h4 class="product-old-price"> precio : <?php echo $data['costo_compra'] ?></h4>
                    <h4 class="product-price"> cantidad : <?php echo $data['cantidad_en_existencia'] ?></h4>
                </div>
            </div>
        <?php  } ?>
        <div class="text-center">
            <h5 class="text-muted">not product</h5>
        </div>
    </div>
    </div>
</section>