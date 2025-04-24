<script language="javascript">
   function listbox_dblclick() {
       document.categories.displaycategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) categories.action = "index.php?content=displayOutdoorcategory";
           if (target == 1) categories.action = "index.php?content=removeOutdoorcategory";
           if (target == 2) categories.action = "index.php?content=updateOutdoorcategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Category</h2>
<form name="categories" method="post">
    <select ondblclick="listbox_dblclick()" name="CategoryID" size="20"> 
        <?php
        /*
        David Guemes Giles
        03/15/25 
        IT-202-002 Phase 2 Assignment: CRUD Categories and Products
        dg224@njit.edu
        */
        //require_once("OutdoorClothingCategory.php");
        
        $categories = OutdoorClothingCategory::getCategories();
            foreach ($categories as $category) {
                $categoryID = $category->CategoryID; 
                $categoryCode = $category->CategoryCode;
                $categoryName = $category->CategoryName;

                $displayText = "$categoryID - $categoryCode, $categoryName";
                echo "<option value=\"$categoryID\">$displayText</option>\n";
            }
        ?>
    </select>
    <br>
   <input type="submit" onClick="button_click(0)" name="displaycategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="deletecategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="updatecategory" value="Update Category">
</form>