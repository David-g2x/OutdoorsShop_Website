<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
include("OutdoorClothingProduct.php");

$ProductID = $_POST['ProductID'];
$product = OutdoorClothingProduct::findProduct($ProductID);

if (!$product) {
    die("<h2>Error: Product ID $ProductID not found.</h2>");
}

$product->ProductCode = $_POST['ProductCode'];
$product->ProductName = $_POST['ProductName'];
$product->ProductDescription = $_POST['ProductDescription'];
$product->Model = $_POST['Model'];
$product->Size = $_POST['Size'];
$product->Color = $_POST['Color'];
$product->CategoryID = $_POST['CategoryID'];
$product->WholesalePrice = $_POST['WholesalePrice'];
$product->ListPrice = $_POST['ListPrice'];
$result = $product->updateProduct();

if ($result) {
    echo "<h2>Product $ProductID updated</h2>\n";
} else {
    echo "<h2>Problem updating product $ProductID</h2>\n";
}
?>
