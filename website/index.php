<?php
/*
David Guemes Giles
02/28/25 
IT-202-002 Phase 1 Assignment: Login and Logout
dg224@njit.edu
*/
session_start();
include("OutdoorClothingcategory.php");
include("OutdoorClothingProduct.php");

?>
<!DOCTYPE html>
<html>
<head><title>Outdoor Clothing Shop Inventory Helper</title></head>
<body>
<header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 425px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
   <section id="container">
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>