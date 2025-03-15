
<h2>Select Category</h2>

<form name="categories" method="post">
    <select name="categoryID" size="20">
        <?php
        /*
        David Guemes Giles
        03/15/25 
        IT-202-002 Phase 2 Assignment: CRUD Categories and Products
        dg224@njit.edu
        */
        require_once("OutdoorClothingCategory.php"); // Code wasnt working w/o this
        $categories = OutdoorClothingCategory::getCategories();
        if ($categories) {
            foreach ($categories as $category) {
                $categoryID = $category->CategoryID; // Fixed property name
                $categoryCode = $category->CategoryCode;
                $categoryName = $category->CategoryName;

                $displayText = "$categoryID - $categoryCode, $categoryName";
                echo "<option value=\"$categoryID\">$displayText</option>\n";
            }
        } else {
            echo "<option>No categories available</option>\n";
        }
        ?>
    </select>
</form>