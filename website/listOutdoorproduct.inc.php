<h2>Select Product</h2>
<form name="products" method="post">
   <select name="ProductID" size="20">
       <?php
       /*
        David Guemes Giles
        03/15/25 
        IT-202-002 Phase 2 Assignment: CRUD Categories and Products
        dg224@njit.edu
        */
       //include("OutdoorClothingProduct.php");
       $products = OutdoorClothingProduct::getProducts();
       foreach ($products as $product) {
           $ProductID = $product->ProductID;
           $ProductName = $product->ProductName;
           $option = $ProductID . " - " . $ProductName;
           echo "<option value=\"$ProductID\">$option</option>\n";
       }
       ?>
   </select>
</form>