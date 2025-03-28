<!-- 
David Guemes Giles  
03/28/25  
Phase 3 Assignment: HTML Website Layout  
dg224@njit.edu  
-->

<h2>Enter New Category Information</h2>
<form name="newcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
          <td>Category ID:</td>
          <td><input type="number" name="CategoryID" size="4" min="1" max="999" required></td>
       </tr>
       <tr>
         <td>Category Code:</td>
        <td><input type="text" name="CategoryCode" size="20" placeholder="XX" minlength="2" required></td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="CategoryName" size="50" required></td>
       </tr>
       <tr>
           <td>Aisle Number:</td>
           <td><input type="number" name="AisleNumber" size="50" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addOutdoorcategory">
</form>