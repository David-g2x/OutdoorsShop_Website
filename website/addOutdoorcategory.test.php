<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
include("OutdoorClothingCategory.php");

$categoryID = $_POST['CategoryID'];

if ((trim($categoryID) == '') || (!is_numeric($categoryID))) {
    echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
    $categoryCode = $_POST['CategoryCode'];
    $categoryName = $_POST['CategoryName'];
    $aisleNumber = $_POST['AisleNumber'];

    $category = new OutdoorClothingCategory(null, $categoryCode, $categoryName, $aisleNumber);
    $result = $category->saveCategory();

    if ($result) {
        echo "<h2>New Category successfully added</h2>\n";
        echo "<h2>$category</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that category</h2>\n";
    }
}
?>
