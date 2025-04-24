<table width="100%" cellpadding="3">
   <?php
   /*
    David Guemes Giles
    03/28/25 
    Phase 3 Assignment: HTML Website Layout
    dg224@njit.edu
    */
    
    echo '<style>
    .gold-welcome {
        color: #ffe9cc;
    }
    </style>';
    

   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
               <!-- <hr /> -->
           </td>
       </tr>
   <?php
   } else {
    echo "<td><h3 class='gold-welcome'>Welcome, {$_SESSION['login']}</h3></td>\n";
   ?>
       <tr>
           <td> <img src="images/home.png" alt="Home Icon" width="12" height="12">&nbsp;
            <a href="index.php"><strong>Home</strong></a>
            </td>
       </tr>
       <tr>
            <td><img src="images/categories.png" alt="Categories Icon" width="12" height="12">&nbsp;
                <strong>Categories</strong>
            </td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listOutdoorcategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newOutdoorcategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
            <td><img src="images/items.png" alt="Items Icon" width="12" height="12">&nbsp;
                <strong>Products</strong>
            </td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listOutdoorproduct">
                   <strong>List Products</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newOutdoorproduct">
                   <strong>Add New Product</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td> <a href="index.php?content=logout">
            <img src="images/logout.png" alt="Logout Icon" width="12" height="12"></a>&nbsp;
            <a href="index.php?content=logout">
            <strong>Logout</strong></a>
            </td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Product:</label><br>
                   <input type="number" name="ProductID" size="14" min="1" required />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updateOutdoorproduct" />
               </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="number" name="CategoryID" size="14" min="1" required />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displayOutdoorcategory" />
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>