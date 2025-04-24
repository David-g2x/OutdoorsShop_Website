<?php
/* 
David Guemes Giles  
04/24/25  
Phase 5 Assignment: JavaScript
dg224@njit.edu  
*/
ob_start();
include("OutdoorClothingCategory.php");
include("OutdoorClothingProduct.php");
// Fetch values using the static methods
$totalCategories = OutdoorClothingCategory::getTotalCategories();
$totalProducts = OutdoorClothingProduct::getTotalItems();
$listpricetotal = OutdoorClothingProduct::getTotalListPrice(); 
$wholesalepricetotal = OutdoorClothingProduct::getWholesalePrice(); 
// Create XML document
$doc = new DOMDocument("1.0", "UTF-8");
$doc->formatOutput = true;
$inventory = $doc->createElement("inventory");
$doc->appendChild($inventory);
// Add <categories> element
$categories = $doc->createElement("categories", $totalCategories);
$inventory->appendChild($categories);
// Add <products> element
$products = $doc->createElement("products", $totalProducts);
$inventory->appendChild($products);
// Add <listpricetotal> element
$listpricetotals = $doc->createElement("listpricetotal", $listpricetotal);
$inventory->appendChild($listpricetotals);
// Add <wholesalepricetotal> element
$wholesaleElement = $doc->createElement("wholesalepricetotal", $wholesalepricetotal);
$inventory->appendChild($wholesaleElement);
// Output XML
header("Content-type: application/xml");
ob_end_clean();
echo $doc->saveXML();
?>