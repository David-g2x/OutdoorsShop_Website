<?php
/*
David Guemes Giles
02/28/25 
IT-202-002 Phase 1 Assignment: Login and Logout
dg224@njit.edu
*/
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];

$query = "SELECT firstName, lastName, pronouns FROM outdoorGearManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
$stmt->close(); // Close the statement after fetching

$name = "$firstName $lastName";

if ($fetched) {
   echo "<h2>Welcome $name$pronouns to Outdoor Gear Shop Inventory Helper</h2>\n";
   session_start();
   $_SESSION['login'] = $name;
   $_SESSION['pronouns'] = $pronouns;
   header("Location: index.php");
   exit();
} else {
   echo "<h2>Sorry Outdoor Gear Shop, login incorrect</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
?>
