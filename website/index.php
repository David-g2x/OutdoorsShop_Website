<?php
/*
David Guemes Giles
02/28/25 
IT-202-002 Phase 1 Assignment: Login and Logout
dg224@njit.edu
*/
session_start();
include("OutdoorClothingCategory.php");
include("OutdoorClothingProduct.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Outdoor Clothing Shop Inventory Helper</title>
    <link rel="stylesheet" type="text/css" href="ih_styles.css">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>
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
            $file = basename($_REQUEST['content']) . ".inc.php";
            $fullPath = __DIR__ . '/' . $file;
        
            // Check if file exists (case-sensitive) and is in the same directory
            if (file_exists($fullPath)) {
                include($file);
            } else {
                include("main.inc.php");
            }
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