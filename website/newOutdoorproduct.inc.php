<!-- 
David Guemes Giles  
03/28/25  
Phase 3 Assignment: HTML Website Layout  
dg224@njit.edu  
-->
<h2>Enter New Product Information</h2>
<form name="newproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="number" name="ProductID" size="10" min="1" max="100" required></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="ProductCode" size="10" placeholder="XXX" minlength="3" maxlength ="10" required></td>
       </tr>
       <tr>
           <td>Product Name:</td>
           <td><input type="text" name="ProductName" size="10" minlength = "5" maxlength = "100" required></td>
       </tr>
       <tr>
           <td>Product Description:</td>
           <td><input type="text" name="ProductDescription" size="10" minlength = "50" maxlength = "1000" required></td>
       </tr>
       <tr>
           <td>Model:</td>
           <td><input type="text" name="Model" size="10" minlength ="4" maxlength= "50" required></td>
       </tr>
       <tr>
           <td>Size:</td>
           <td><input type="text" name="Size" size="10" minlength ="1" maxlength= "40"required></td>
       </tr>
       <tr>
           <td>Color:</td>
           <td><input type="text" name="Color" size="10" minlength ="4" maxlength= "50" required></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="number" name="CategoryID" size="10" min="1" max="50" required></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="number" name="WholesalePrice" size="10" min="1" max = "5000" required></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="ListPrice" size="10" min="1" max = "6000" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addOutdoorproduct">
</form>
