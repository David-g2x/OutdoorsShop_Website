<?php
/* 
David Guemes Giles  
04/24/25  
Phase 5 Assignment: JavaScript
dg224@njit.edu  
*/

require_once("OutdoorClothingCategory.php");
if (!isset($_POST['CategoryID']) || !is_numeric($_POST['CategoryID'])) {
    ?>
    <h2>You did not select a valid CategoryID to update.</h2>
    <a href="index.php?content=listcategories">List Categories</a>
    <?php
} else {
    $categoryID = $_POST['CategoryID'];
    $category = OutdoorClothingCategory::findCategory($categoryID);

    if ($category) {
        ?>
        <h2>Update Category <?php echo htmlspecialchars($categoryID); ?></h2><br>
        <form name="category" action="index.php" method="post">
            <label for="categoryCode">Category Code:</label>
            <input type="text" name="CategoryCode" id="categoryCode" value="<?php echo htmlspecialchars($category->CategoryCode); ?>" required><br><br>

            <label for="categoryName">Category Name:</label>
            <input type="text" name="CategoryName" id="categoryName" value="<?php echo htmlspecialchars($category->CategoryName); ?>" required><br><br>

            <label for="aisleNumber">Aisle Number:</label>
            <input type="number" name="AisleNumber" id="aisleNumber" value="<?php echo htmlspecialchars($category->AisleNumber); ?>" required><br><br>

            <input type="submit" name="answer" value="Update Category">
            <input type="submit" name="answer" value="Cancel">

            <input type="hidden" name="CategoryID" value="<?php echo htmlspecialchars($categoryID); ?>">
            <input type="hidden" name="content" value="changeOutdoorcategory">
        </form>

        <script>
            document.forms['category'].elements['CategoryCode'].focus();
            document.forms['category'].elements['CategoryCode'].select();
        </script>
        <?php
    } else {
        ?>
        <h2>Sorry, category <?php echo htmlspecialchars($categoryID); ?> not found</h2>
        <a href="index.php?content=listcategories">List Categories</a>
        <?php
    }
}
?>

<script language="javascript">
   document.category.categoryCode.focus();
   document.category.categoryCode.select();
</script>
