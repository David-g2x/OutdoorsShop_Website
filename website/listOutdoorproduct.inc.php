<script language="javascript">
   function listbox_dblclick() {
       document.products.displaycategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this product?");
       }
       if (userConfirmed) {
           if (target == 0) products.action = "index.php?content=displayOutdoorproduct";
           if (target == 1) products.action = "index.php?content=removeOutdoorproduct";
           if (target == 2) products.action = "index.php?content=updateOutdoorproduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Product</h2>
<form name="products" method="post">
   <select ondblclick="listbox_dblclick()" name="ProductID" size="20">
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
   <br>
   <input type="submit" onClick="button_click(0)" name="displayproduct" value="View Product">
   <input type="submit" onClick="button_click(1)" name="deleteproduct" value="Delete Product">
   <input type="submit" onClick="button_click(2)" name="updateproduct" value="Update Product">
</form>