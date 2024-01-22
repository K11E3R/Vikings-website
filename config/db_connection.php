<?php 

/**
 * This function is used to get the database connection.
 * @return PDO|null
 */

function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "VikingsDatabase";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}

?>
