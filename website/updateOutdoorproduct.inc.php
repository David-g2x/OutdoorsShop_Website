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

if (!isset($_POST['ProductID']) || !is_numeric($_POST['ProductID'])) {
    ?>
    <h2>You did not select a valid ProductID value</h2>
    <a href="index.php?content=listOutdoorproduct">List items</a>
    <?php
} else {
    $ProductID = htmlspecialchars($_POST['ProductID']);
    $item = OutdoorClothingProduct::findProduct($ProductID);
    if ($item) {
        ?>
        <h2>Update Item <?php echo htmlspecialchars($item->ProductID); ?></h2><br>
        <form name="products" action="index.php" method="post">
    <table>
        <tr>
            <td>Product ID:</td>
            <td><?php echo htmlspecialchars($item->ProductID); ?></td>
        </tr>
        <tr>
            <td>Product Code:</td>
            <td><input type="text" name="ProductCode" value="<?php echo htmlspecialchars($item->ProductCode); ?>" size="10" placeholder="XXX" minlength="3" maxlength="10" required></td>
        </tr>
        <tr>
            <td>Product Name:</td>
            <td><input type="text" name="ProductName" value="<?php echo htmlspecialchars($item->ProductName); ?>" size="10" minlength="5" maxlength="100" required></td>
        </tr>
        <tr>
            <td>Product Description:</td>
            <td><input type="text" name="ProductDescription" value="<?php echo htmlspecialchars($item->ProductDescription); ?>" size="10" minlength="50" maxlength="1000" required></td>
        </tr>
        <tr>
            <td>Model:</td>
            <td><input type="text" name="Model" value="<?php echo htmlspecialchars($item->Model); ?>" size="10" minlength="4" maxlength="50" required></td>
        </tr>
        <tr>
            <td>Size:</td>
            <td><input type="text" name="Size" value="<?php echo htmlspecialchars($item->Size); ?>" size="10" minlength="1" maxlength="40" required></td>
        </tr>
        <tr>
            <td>Color:</td>
            <td><input type="text" name="Color" value="<?php echo htmlspecialchars($item->Color); ?>" size="10" minlength="4" maxlength="50" required></td>
        </tr>
        <tr>
            <td>Category ID:</td>
            <td><input type="number" name="CategoryID" value="<?php echo htmlspecialchars($item->CategoryID); ?>" size="10" min="1" max="50" required></td>
        </tr>
        <tr>
            <td>Wholesale Price:</td>
            <td><input type="number" name="WholesalePrice" value="<?php echo htmlspecialchars($item->WholesalePrice); ?>" size="10" min="1" max="5000" required></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="number" name="ListPrice" value="<?php echo htmlspecialchars($item->ListPrice); ?>" size="10" min="1" max="6000" required></td>
        </tr>
    </table>
    <input type="submit" name="answer" value="Update Product">
    <input type="submit" name="answer" value="Cancel">
    <input type="hidden" name="ProductID" value="<?php echo htmlspecialchars($ProductID); ?>">
    <input type="hidden" name="content" value="changeOutdoorproduct">
</form>
        <?php
    } else {
        ?>
        <h2>Sorry, product <?php echo htmlspecialchars($ProductID); ?> not found</h2>
        <a href="index.php?content=listOutdoorproduct">List items</a>
        <?php
    }
}
?>