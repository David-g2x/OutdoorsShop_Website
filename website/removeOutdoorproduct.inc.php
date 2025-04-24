<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
//include("OutdoorClothingProduct.php");
error_log("\$_POST " . print_r($_POST, true));
require_once("OutdoorClothingProduct.php");
$ProductID = $_POST['ProductID'];
$product = OutdoorClothingProduct::findProduct($ProductID);
$result = $product ? $product->removeProduct() : false;
if ($result)
   echo "<h2>Product $ProductID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing product $ProductID</h2>\n";
?>