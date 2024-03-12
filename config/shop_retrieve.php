<?php   
include_once 'db_connection.php';


function testDatabaseConnection() {

    $conn = getConnection();
    if ($conn->errorCode() !== null) {
        return "Database connection failed: " . $conn->errorCode();
    }

    return "Database connection successful!";
}

// Retrieve all accounts
function getAllProducts() {
    $conn = getConnection();
    $sql = "SELECT * FROM produit;";
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        $products = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $products[] = $row;
        }
        return $products;
    } else {
        return array();
    }
}

?>