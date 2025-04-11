<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
///include("OutdoorClothingProduct.php");

if (isset($_SESSION['login'])) {
    $ProductID = filter_input(INPUT_POST, 'ProductID', FILTER_VALIDATE_INT);
    $ProductCode = htmlspecialchars(filter_input(INPUT_POST, 'ProductCode', FILTER_SANITIZE_STRING));
    $ProductName = htmlspecialchars(filter_input(INPUT_POST, 'ProductName', FILTER_SANITIZE_STRING));
    $ProductDescription = htmlspecialchars(filter_input(INPUT_POST, 'ProductDescription', FILTER_SANITIZE_STRING));
    $Model = htmlspecialchars(filter_input(INPUT_POST, 'Model', FILTER_SANITIZE_STRING));
    $Size = htmlspecialchars(filter_input(INPUT_POST, 'Size', FILTER_SANITIZE_STRING));
    $Color = htmlspecialchars(filter_input(INPUT_POST, 'Color', FILTER_SANITIZE_STRING));
    $CategoryID = filter_input(INPUT_POST, 'CategoryID', FILTER_VALIDATE_INT);
    $WholesalePrice = filter_input(INPUT_POST, 'WholesalePrice', FILTER_VALIDATE_FLOAT);
    $ListPrice = filter_input(INPUT_POST, 'ListPrice', FILTER_VALIDATE_FLOAT);

    if (
        empty($ProductID) || empty($ProductCode) || empty($ProductName) || 
        empty($ProductDescription) || empty($Model) || empty($Size) || 
        empty($Color) || $CategoryID === false || $WholesalePrice === false || 
        $ListPrice === false
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