<?php
/*
David Guemes Giles
02/28/25 
IT-202-002 Phase 1 Assignment: Login and Logout
dg224@njit.edu
*/
ob_start();
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
    <script src="realtime.js"></script>
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
            <aside>
                <?php include("aside.inc.php"); ?>
                <script>
                    getRealTime();
                    setInterval(getRealTime, 5000);
                </script>
            </aside>

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
    </section>

    <footer>
        <?php include("footer.inc.php"); ?>
    </footer>

<?php ob_end_flush();?>
</body>
</html>