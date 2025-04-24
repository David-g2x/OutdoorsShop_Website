<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
require_once("OutdoorClothingCategory.php");
if (isset($_SESSION['login'])) {
    $categoryID = $_POST['CategoryID'];  
    $answer     = $_POST['answer'];

    if ($answer == "Update Category") {
        $category = OutdoorClothingCategory::findCategory($categoryID);
        
        if (!$category) {
            die("<h2>Error: Category ID $categoryID not found.</h2>");
        }

        $category->CategoryCode  = $_POST['CategoryCode'];
        $category->CategoryName  = $_POST['CategoryName'];
        $category->AisleNumber   = $_POST['AisleNumber'];

        $result = $category->updateCategory();

        if ($result) {
            echo "<h2>Category $categoryID updated</h2>\n";
        } else {
            echo "<h2>Problem updating category $categoryID</h2>\n";
        }
    } else {
        echo "<h2>Update Canceled for category $categoryID</h2>\n";
    }
} else {
    echo "<h2>You must be logged in to update a category.</h2>\n";
}
?>
