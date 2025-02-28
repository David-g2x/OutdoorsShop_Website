<?php
/*
David Guemes Giles
02/28/25 
IT-202-002 Phase 1 Assignment: Login and Logout
dg224@njit.edu
*/
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
   unset($_SESSION['pronouns']);
}
header("Location: index.php");
?>