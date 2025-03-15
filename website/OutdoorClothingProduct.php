<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
require_once('database.php');

class OutdoorClothingProduct
{
   public $ProductID;
   public $ProductCode;
   public $ProductName;
   public $ProductDescription;
   public $Model;
   public $Size;
   public $Color;
   public $CategoryID;
   public $WholesalePrice;
   public $ListPrice;

   function __construct($ProductID, $ProductCode, $ProductName, $ProductDescription, $Model, $Size, $Color, $CategoryID, $WholesalePrice, $ListPrice)
   {
       $this->ProductID = $ProductID;
       $this->ProductCode = $ProductCode;
       $this->ProductName = $ProductName;
       $this->ProductDescription = $ProductDescription;
       $this->Model = $Model;
       $this->Size = $Size;
       $this->Color = $Color;
       $this->CategoryID = $CategoryID;
       $this->WholesalePrice = $WholesalePrice;
       $this->ListPrice = $ListPrice;
   }

   function __toString()
   {
       return "<h2>Product ID: $this->ProductID</h2>" .
           "<h2>Code: $this->ProductCode</h2>" .
           "<h2>Name: $this->ProductName</h2>" .
           "<h2>Description: $this->ProductDescription</h2>" .
           "<h2>Model: $this->Model, Size: $this->Size, Color: $this->Color</h2>" .
           "<h2>Category ID: $this->CategoryID</h2>" .
           "<h2>Wholesale Price: $$this->WholesalePrice, List Price: $$this->ListPrice</h2>";
   }

   public function saveProduct()
{
    $db = getDB();
    
    if (empty($this->ProductCode) || empty($this->ProductName) || empty($this->ProductDescription) || 
        empty($this->Model) || empty($this->Size) || empty($this->Color) ||
        !is_numeric($this->CategoryID) || !is_numeric($this->WholesalePrice) || !is_numeric($this->ListPrice)) {
        die("<h2>Error: Invalid or missing input values. Check your data.</h2>");
    }

    $query = "INSERT INTO OutdoorClothingProducts (ProductCode, ProductName, ProductDescription, Model, Size, Color, CategoryID, WholesalePrice, ListPrice, DateCreated) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $db->prepare($query);
    
    if (!$stmt) {
        die("Error preparing statement: " . $db->error);
    }

    $stmt->bind_param(
        "ssssssidd", 
        $this->ProductCode,
        $this->ProductName,
        $this->ProductDescription,
        $this->Model,
        $this->Size,
        $this->Color,
        $this->CategoryID,
        $this->WholesalePrice,
        $this->ListPrice
    );

    $result = $stmt->execute();

    if (!$result) {
        echo "<h2>Execute failed:</h2><pre>" . $stmt->error . "</pre>";
        return false;
    }

    $stmt->close();
    $db->close();
    return $result;
}


   static function getProducts()
   {
       $db = getDB();
       $query = "SELECT * FROM OutdoorClothingProducts";
       $result = $db->query($query);
       if ($result->num_rows > 0) {
           $products = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $product = new OutdoorClothingProduct(
                   $row['ProductID'],
                   $row['ProductCode'],
                   $row['ProductName'],
                   $row['ProductDescription'],
                   $row['Model'],
                   $row['Size'],
                   $row['Color'],
                   $row['CategoryID'],
                   $row['WholesalePrice'],
                   $row['ListPrice']
               );
               array_push($products, $product);
           }
           $db->close();
           return $products;
       } else {
           $db->close();
           return NULL;
       }
   }

   function updateProduct()
   {
       $db = getDB();
       $query = "UPDATE OutdoorClothingProducts SET ProductCode= ?, ProductName= ?, ProductDescription= ?, Model= ?, 
                 Size= ?, Color= ?, CategoryID= ?, WholesalePrice= ?, ListPrice= ? WHERE ProductID = ?";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "ssssssiddi",
           $this->ProductCode,
           $this->ProductName,
           $this->ProductDescription,
           $this->Model,
           $this->Size,
           $this->Color,
           $this->CategoryID,
           $this->WholesalePrice,
           $this->ListPrice,
           $this->ProductID
       );
       $result = $stmt->execute();
       $stmt->close();
       $db->close();
       return $result;
   }

   static function findProduct($ProductID)
   {
       $db = getDB();
       $query = "SELECT * FROM OutdoorClothingProducts WHERE ProductID = ?";
       $stmt = $db->prepare($query);
       $stmt->bind_param("i", $ProductID);
       $stmt->execute();
       $result = $stmt->get_result();
       $row = $result->fetch_array(MYSQLI_ASSOC);
       $stmt->close();
       $db->close();
       if ($row) {
           return new OutdoorClothingProduct(
               $row['ProductID'],
               $row['ProductCode'],
               $row['ProductName'],
               $row['ProductDescription'],
               $row['Model'],
               $row['Size'],
               $row['Color'],
               $row['CategoryID'],
               $row['WholesalePrice'],
               $row['ListPrice']
           );
       } else {
           return NULL;
       }
   }

   function removeProduct()
   {
       $db = getDB();
       $query = "DELETE FROM OutdoorClothingProducts WHERE ProductID = ?";
       $stmt = $db->prepare($query);
       $stmt->bind_param("i", $this->ProductID);
       $result = $stmt->execute();
       $stmt->close();
       $db->close();
       return $result;
   }

   static function getProductsByCategory($CategoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM OutdoorClothingProducts WHERE CategoryID = ?";
       $stmt = $db->prepare($query);
       $stmt->bind_param("i", $CategoryID);
       $stmt->execute();
       $result = $stmt->get_result();
       if ($result->num_rows > 0) {
           $products = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $product = new OutdoorClothingProduct(
                   $row['ProductID'],
                   $row['ProductCode'],
                   $row['ProductName'],
                   $row['ProductDescription'],
                   $row['Model'],
                   $row['Size'],
                   $row['Color'],
                   $row['CategoryID'],
                   $row['WholesalePrice'],
                   $row['ListPrice']
               );
               array_push($products, $product);
           }
           $stmt->close();
           $db->close();
           return $products;
       } else {
           $stmt->close();
           $db->close();
           return NULL;
       }
   }
}
?>
