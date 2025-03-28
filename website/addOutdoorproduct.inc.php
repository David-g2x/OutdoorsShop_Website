<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
///include("OutdoorClothingProduct.php");

if (isset($_SESSION['login'])) {
    $ProductID = isset($_POST['ProductID']) ? trim($_POST['ProductID']) : '';
    $ProductCode = isset($_POST['ProductCode']) ? trim($_POST['ProductCode']) : '';
    $ProductName = isset($_POST['ProductName']) ? trim($_POST['ProductName']) : '';
    $ProductDescription = isset($_POST['ProductDescription']) ? trim($_POST['ProductDescription']) : '';
    $Model = isset($_POST['Model']) ? trim($_POST['Model']) : '';
    $Size = isset($_POST['Size']) ? trim($_POST['Size']) : '';
    $Color = isset($_POST['Color']) ? trim($_POST['Color']) : '';
    $CategoryID = isset($_POST['CategoryID']) ? $_POST['CategoryID'] : null;
    $WholesalePrice = isset($_POST['WholesalePrice']) ? $_POST['WholesalePrice'] : null;
    $ListPrice = isset($_POST['ListPrice']) ? $_POST['ListPrice'] : null;

    if (
        empty($ProductID) || empty($ProductCode) || empty($ProductName) || 
        empty($ProductDescription) || empty($Model) || empty($Size) || 
        empty($Color) || !is_numeric($CategoryID) || !is_numeric($WholesalePrice) || 
        !is_numeric($ListPrice)
    ) {
        echo "<h2>Sorry, you must enter a valid Product ID, Product Code, Name, Description, Model, Size, Color, Category ID, Wholesale Price, and List Price</h2>\n";
    } else {
        $product = new OutdoorClothingProduct(
            $ProductID, 
            $ProductCode,
            $ProductName,
            $ProductDescription,
            $Model,
            $Size,
            $Color,
            $CategoryID,
            $WholesalePrice,
            $ListPrice
        );
        $result = $product->saveProduct();
        
        if ($result) {
            echo "<h2>New Product '{$ProductName}' (ID: {$ProductID}, Code: {$ProductCode}) successfully added.</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding the product.</h2>\n";
        }
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>