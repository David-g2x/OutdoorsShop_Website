<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
// include('item.php');

if (isset($_SESSION['login'])) {
    $productID = $_POST['ProductID'];  
    $answer    = $_POST['answer'];
    
    if ($answer == "Update Product") {
        $product = OutdoorClothingProduct::findProduct($productID);
        
        if (!$product) {
            die("<h2>Error: Product ID $productID not found.</h2>");
        }
        
        $product->ProductCode        = $_POST['ProductCode'];
        $product->ProductName        = $_POST['ProductName'];
        $product->ProductDescription = $_POST['ProductDescription'];
        $product->Model              = $_POST['Model'];
        $product->Size               = $_POST['Size'];
        $product->Color              = $_POST['Color'];
        $product->CategoryID         = $_POST['CategoryID'];
        $product->WholesalePrice     = $_POST['WholesalePrice'];
        $product->ListPrice          = $_POST['ListPrice'];
        
        
        $result = $product->updateProduct();
        
        if ($result) {
            echo "<h2>Product $productID updated</h2>\n";
        } else {
            echo "<h2>Problem updating product $productID</h2>\n";
        }
    } else {
        echo "<h2>Update Canceled for product $productID</h2>\n";
    }
} else {
    echo "<h2>You must be logged in to update a product.</h2>\n";
}
?>