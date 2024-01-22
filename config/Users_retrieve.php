<?php   
include_once 'db_connection.php';


function testDatabaseConnection() {
    $conn = getConnection();

    if ($conn->errorCode() !== null) {
        return "Database connection failed: " . $conn->errorCode();
    } else {
        return "Database connection successful!";
    }
}

// Retrieve all accounts
function getAllAccounts() {
    $conn = getConnection();
    $sql = "SELECT * FROM account";
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        $accounts = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $accounts[] = $row;
        }
        return $accounts;
    } else {
        return array();
    }
}

?>