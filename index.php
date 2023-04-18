<?php
require_once("product/productClass.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scandiweb test assigment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
<!-- Header with buttons -->
  <header class="navbar container-fluid pt-5 border-bottom border-dark mb-5">
    <div class="d-flex container-fluid justify-content-between">
    <div class="">
   <h2 class="fs-2 fw-bold">
      Product List
      </div>
    </h2>
    <div class="">
    <a href="add_product.php"><button class="btn btn-primary add-product-btn me-2">ADD</button></a>
    <button class="btn btn-danger" type="submit" form="product_list" name="delete" id="delete-product-btn">MASS DELETE</button>
    </div>
    </div>
  </header>
<!-- Form with php and checkbox -->
<form action="product/delete.php" method="post" id="product_list">
  <div class="row column-gap-5">
  <?php 
  $take = new Product();
  $product = $take->showAll();
  foreach ($product as $key => $prod):?>
  <div class="col-sm-2 border border-dark my-5 container-fluid shadow">
    <input type="checkbox" class="delete-checkbox" name="skus[]" id="" value="<?= $prod['sku']?>">
    <h5 class="text-center"><?= $prod['sku']?></h5>
    <p class=" text-center"><?= $prod['name']?></p>
    <p class=" text-center"><?= $prod['price']?>$</p>
    <p class=" text-center">
    <?php echo $prod['size'] != 0 ? "Size: " . $prod['size'] . " " ."MB" : '';

          echo $prod['weight'] != 0 ? "Weight: " . $prod['weight'] . " " . "KG" : '';

          echo $prod['height'] && $prod['width'] && $prod['length'] != 0 ? "Dimensions: " . $prod['height']."x".$prod['width']."x".$prod['length'] : "" ; ?> </p>
  </div>
  <?php endforeach ?>
</div>
</form> 
<!-- Footer with text -->
<footer class="container-fluid py-5 border-top border-dark mt-5">
<h5 class="text-center">Scandiweb test assignment</h5>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>