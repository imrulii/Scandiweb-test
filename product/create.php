<?php
if(isset($_POST['save']))
{
    require_once('productClass.php');
    $product = new Product();

    $product->setSku($_POST['sku']);
    $product->setName($_POST['name']);
    $product->setPrice($_POST['price']);
    $product->setSize($_POST['size']);
    $product->setWeight($_POST['weight']);
    $product->setWidth($_POST['width']);
    $product->setHeight($_POST['height']);
    $product->setLength($_POST['length']);

    $result = $product->insertProduct();

    if ($result)
    {
        header("location:../index.php");
    }
    else {
        
        echo "<h1>This sku already exist, please provide a different one.</h1>";
    }
    
  
}
?>