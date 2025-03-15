<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
error_log("\$_POST " . print_r($_POST, true));
include("OutdoorClothingCategory.php");
$categoryID = $_POST['CategoryID'];
$category = OutdoorClothingCategory::findCategory($categoryID);
if (!$category) { 
    echo "<h2>Error: Category ID $categoryID not found.</h2>\n";
    exit;
}
$result = $category->removeCategory();
if ($result)
    echo "<h2>Category $categoryID removed</h2>\n";
else
    echo "<h2>Sorry, problem removing category $categoryID.</h2>\n";
?>