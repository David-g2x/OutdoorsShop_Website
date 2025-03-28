<?php
/*
David Guemes Giles
03/28/25 
Phase 3 Assignment: HTML Website Layout
dg224@njit.edu
*/
if (!isset($_POST['ProductID']) || !is_numeric($_POST['ProductID'])) {
    ?>
    <h2>You did not select a valid ProductID value</h2>
    <a href="index.php?content=listOutdoorproduct">List items</a>
    <?php
} else {
    $ProductID = $_POST['ProductID'];
    $item = OutdoorClothingProduct::findProduct($ProductID);
    if ($item) {
        ?>
        <h2>Update Item <?php echo $item->ProductID; ?></h2><br>
        <form name="products" action="index.php" method="post">
    <table>
        <tr>
            <td>Product ID</td>
            <td><?php echo $item->ProductID; ?></td>
        </tr>
        <tr>
            <td>Product Code</td>
            <td><input type="text" name="ProductCode" value="<?php echo $item->ProductCode; ?>" required></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="ProductName" value="<?php echo $item->ProductName; ?>" required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="ProductDescription" value="<?php echo $item->ProductDescription; ?>" required></td>
        </tr>
        <tr>
            <td>Model</td>
            <td><input type="text" name="Model" value="<?php echo $item->Model; ?>" required></td>
        </tr>
        <tr>
            <td>Size</td>
            <td><input type="text" name="Size" value="<?php echo $item->Size; ?>" required></td>
        </tr>
        <tr>
            <td>Color</td>
            <td><input type="text" name="Color" value="<?php echo $item->Color; ?>" required></td>
        </tr>
        <tr>
            <td>Category ID</td>
            <td><input type="text" name="CategoryID" value="<?php echo $item->CategoryID; ?>" required></td>
        </tr>
        <tr>
            <td>Wholesale Price</td>
            <td><input type="text" name="WholesalePrice" value="<?php echo $item->WholesalePrice; ?>" required></td>
        </tr>
        <tr>
            <td>List Price</td>
            <td><input type="text" name="ListPrice" value="<?php echo $item->ListPrice; ?>" required></td>
        </tr>
    </table>
    <input type="submit" name="answer" value="Update Product">
    <input type="submit" name="answer" value="Cancel">
    <input type="hidden" name="ProductID" value="<?php echo $ProductID; ?>">
    <input type="hidden" name="content" value="changeOutdoorproduct">
</form>        <?php
    } else {
        ?>
        <h2>Sorry, product <?php echo $ProductID; ?> not found</h2>
        <a href="index.php?content=listOutdoorproduct">List items</a>
        <?php
    }
}
?>