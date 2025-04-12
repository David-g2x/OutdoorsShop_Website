<?php
/*
David Guemes Giles
03/28/25 
Phase 3 Assignment: HTML Website Layout
dg224@njit.edu
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<pre>DEBUG POST:\n";
print_r($_POST);
echo "</pre>";
//debuging

if (!isset($_REQUEST['CategoryID']) or (!is_numeric($_REQUEST['CategoryID']))) {
?>
 <h2>You did not select a valid CategoryID to view.</h2>
 <a href="index.php?content=listOutdoorcategories">List Categories</a>
 <?php
} else {
 $categoryID = $_REQUEST['CategoryID'];
 $category = OutdoorClothingCategory::findCategory($categoryID);
 if ($category) {
   echo $category;
   $items = OutdoorClothingProduct::getProductsByCategory($categoryID);
   if ($items) {
 ?>
     <br><br>
     <b>Products:</b><br>
     <table>
       <tr>
         <th>Product</th>
         <th>Name</th>
         <th>Price</th>
       </tr>
       <?php
       $itemtotal = 0;
       foreach ($items as $item) {
       ?>
         <tr>
           <td><?php echo $item->ProductID; ?></td>
           <td><?php echo $item->ProductName; ?></td>
           <td><?php echo $item->ListPrice; ?></td>
         </tr>
       <?php
       }
       ?>
     </table>
   <?php
   } else {
     echo "<h2>There are no items for this category</h2>\n";
   }
 } else {
    echo "<h2>Sorry, category $categoryID not found</h2>\n";
}
}
?>
