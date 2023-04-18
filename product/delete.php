<?php
require_once("productClass.php");
$product = new Product();

if(isset($_POST['delete']))
{
  if(isset($_POST['skus']) && is_array($_POST['skus']))
  {
    $product->setSku($_POST["skus"]);
    $product->deleteProduct();
    header("location:../index.php");
  }
  header("location:../index.php");
}


?>
 