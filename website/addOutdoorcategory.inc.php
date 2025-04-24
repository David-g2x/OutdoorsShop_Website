<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
//include("OutdoorClothingCategory.php");

if (isset($_SESSION['login'])) {
    $categoryID = filter_input(INPUT_POST, 'CategoryID', FILTER_VALIDATE_INT); 

    if (empty($categoryID) || !is_numeric($categoryID)) {
        echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
    } else {
        $categoryCode = htmlspecialchars(trim($_POST['CategoryCode']));
        $categoryName = htmlspecialchars(trim($_POST['CategoryName']));
        $aisleNumber = htmlspecialchars(trim($_POST['AisleNumber']));

        if (empty($categoryCode) || empty($categoryName) || !is_numeric($aisleNumber)) {
            echo "<h2>Sorry, you must enter valid data for all fields</h2>\n";
        } else {
            $category = new OutdoorClothingCategory($categoryID, $categoryCode, $categoryName, $aisleNumber);
            $result = $category->saveCategory();

            if ($result) {
                echo "<h2>New Category successfully added</h2>\n";
                echo "<h2>$category</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem adding that category:</h2>\n";
                echo "<p>Database error occurred.</p>\n";
            }
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
