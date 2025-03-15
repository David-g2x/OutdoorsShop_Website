<?php
/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
require_once('database.php');

class OutdoorClothingCategory
{
    public $CategoryID;
    public $CategoryCode;
    public $CategoryName;
    public $AisleNumber;
    public $DateCreated;

    function __construct($CategoryID, $CategoryCode, $CategoryName, $AisleNumber, $DateCreated = null)
    {
        if (empty($CategoryCode) || empty($CategoryName) || !is_numeric($AisleNumber)) {
            throw new Exception("Invalid inputs for creating an OutdoorClothingCategory object.");
        }

        $this->CategoryID = $CategoryID;
        $this->CategoryCode = $CategoryCode;
        $this->CategoryName = $CategoryName;
        $this->AisleNumber = $AisleNumber;
        $this->DateCreated = $DateCreated ?? date('Y-m-d H:i:s');
    }

    function __toString()
    {
        return "<h2>Category Number: $this->CategoryID</h2>\n" .
               "<h2>$this->CategoryCode, $this->CategoryName (Aisle: $this->AisleNumber)</h2>\n";
    }

    function saveCategory()
    {
        $db = getDB();
        if (!$db) {
            die("Error: Database connection failed.");
        }

        $query = "INSERT INTO OutdoorClothingCategories (CategoryCode, CategoryName, AisleNumber, DateCreated) 
                  VALUES (?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        if (!$stmt) {
            die("Error preparing statement: " . $db->error);
        }

        $stmt->bind_param("ssi", $this->CategoryCode, $this->CategoryName, $this->AisleNumber);

        if (!$stmt->execute()) {
            echo "Error executing query: " . $stmt->error;
            $stmt->close();
            $db->close();
            return false;
        }

        $stmt->close();
        $db->close();
        return true;
    }

    static function getCategories()
    {
        $db = getDB();
        if (!$db) {
            die("Error: Database connection failed.");
        }

        $query = "SELECT * FROM OutdoorClothingCategories";
        $result = $db->query($query);

        if (!$result) {
            echo "Error executing query: " . $db->error;
            $db->close();
            return NULL;
        }

        $categories = array();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $categories[] = new OutdoorClothingCategory(
                $row['CategoryID'],
                $row['CategoryCode'],
                $row['CategoryName'],
                $row['AisleNumber'],
                $row['DateCreated']
            );
        }

        $db->close();
        return $categories;
    }

    static function findCategory($CategoryID)
    {
        $db = getDB();
        if (!$db) {
            die("Error: Database connection failed.");
        }

        $query = "SELECT * FROM OutdoorClothingCategories WHERE CategoryID = ?";
        $stmt = $db->prepare($query);
        if (!$stmt) {
            die("Error preparing statement: " . $db->error);
        }

        $stmt->bind_param("i", $CategoryID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);

        $stmt->close();
        $db->close();

        if ($row) {
            return new OutdoorClothingCategory(
                $row['CategoryID'],
                $row['CategoryCode'],
                $row['CategoryName'],
                $row['AisleNumber'],
                $row['DateCreated']
            );
        } else {
            return NULL;
        }
    }

    function updateCategory()
    {
        $db = getDB();
        if (!$db) {
            die("Error: Database connection failed.");
        }

        $query = "UPDATE OutdoorClothingCategories SET CategoryCode = ?, 
                  CategoryName = ?, AisleNumber = ? WHERE CategoryID = ?";
        $stmt = $db->prepare($query);
        if (!$stmt) {
            die("Error preparing statement: " . $db->error);
        }

        $stmt->bind_param("ssii", $this->CategoryCode, $this->CategoryName, $this->AisleNumber, $this->CategoryID);

        if (!$stmt->execute()) {
            echo "Error executing query: " . $stmt->error;
            $stmt->close();
            $db->close();
            return false;
        }

        $stmt->close();
        $db->close();
        return true;
    }

    function removeCategory()
    {
        $db = getDB();
        if (!$db) {
            die("Error: Database connection failed.");
        }

        $query = "DELETE FROM OutdoorClothingCategories WHERE CategoryID = ?";
        $stmt = $db->prepare($query);
        if (!$stmt) {
            die("Error preparing statement: " . $db->error);
        }

        $stmt->bind_param("i", $this->CategoryID);

        if (!$stmt->execute()) {
            echo "Error executing query: " . $stmt->error;
            $stmt->close();
            $db->close();
            return false;
        }

        $stmt->close();
        $db->close();
        return true;
    }
}
?>
