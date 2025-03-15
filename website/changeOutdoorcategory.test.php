<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
include("OutdoorClothingCategory.php");
$categoryID = $_POST['CategoryID'];
$category = OutdoorClothingCategory::findCategory($categoryID);
$category->CategoryCode = $_POST['CategoryCode'];
$category->CategoryName = $_POST['CategoryName'];
$category->AisleNumber = $_POST['AisleNumber'];
$result = $category->updateCategory();
if ($result) {
    echo "<h2>Category $categoryID updated</h2>\n";
} else {
    echo "<h2>Problem updating category $categoryID</h2>\n";
}
?>
