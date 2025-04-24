<?php
/*
David Guemes Giles
03/28/25 
Phase 3 Assignment: HTML Website Layout
dg224@njit.edu
*/


if (!isset($_REQUEST['ProductID']) or (!is_numeric($_REQUEST['ProductID']))) {
?>
 <h2>You did not select a valid CategoryID to view.</h2>
 <a href="index.php?content=listOutdoorproduct">List Products</a>
 <?php
} else {
 $productID = $_REQUEST['ProductID'];
 $product = OutdoorClothingProduct::findProduct($productID);
 if ($product) {
 ?>
   <h2>Product ID: <?php echo $product->ProductID; ?></h2>
   <h2>Product Name: <?php echo $product->ProductName; ?></h2>
   <h2>Product List Price: <?php echo $product->ListPrice; ?></h2>
   <h2>Product Wholesale Price: <?php echo $product->WholesalePrice; ?></h2>
   <h2>Description: <?php echo $product->ProductDescription; ?></h2>
   <h2>Model: <?php echo $product->Model; ?></h2>
   <h2>Size: <?php echo $product->Size; ?></h2>
   <h2>Color: <?php echo $product->Color; ?></h2>
   <br>
   <?php
   } else {
        echo "<h2>Sorry, category $productID not found</h2>\n";
    }
}
?>