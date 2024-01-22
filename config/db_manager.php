<?php
// db config
$host = 'localhost';
$database = 'VikingsDatabase';
$username = 'root';
$password = ''; 

// Create Database Connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// CRUD Operations for Partenaire Table
function getAllPartenaires() {
    global $pdo;
    $query = $pdo->query("SELECT * FROM Partenaire");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getPartenaireById($partenaire_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM Partenaire WHERE partenaire_id = :partenaire_id");
    $stmt->bindParam(':partenaire_id', $partenaire_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addPartenaire($data) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO Partenaire (nom, description, logo_url, site_web, contact_email, contact_telephone, adresse, date_creation)
                          VALUES (:nom, :description, :logo_url, :site_web, :contact_email, :contact_telephone, :adresse, NOW())");
    $stmt->execute($data);
    return $pdo->lastInsertId();
}

function updatePartenaire($partenaire_id, $data) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE Partenaire SET nom = :nom, description = :description, logo_url = :logo_url, site_web = :site_web,
                          contact_email = :contact_email, contact_telephone = :contact_telephone, adresse = :adresse
                          WHERE partenaire_id = :partenaire_id");
    $data['partenaire_id'] = $partenaire_id;
    return $stmt->execute($data);
}

function deletePartenaire($partenaire_id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM Partenaire WHERE partenaire_id = :partenaire_id");
    $stmt->bindParam(':partenaire_id', $partenaire_id, PDO::PARAM_INT);
    return $stmt->execute();
}

// CRUD Operations for Produit Table
function getAllProduits() {
    global $pdo;
    $query = $pdo->query("SELECT * FROM Produit");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getProduitById($produit_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM Produit WHERE produit_id = :produit_id");
    $stmt->bindParam(':produit_id', $produit_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addProduit($data) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO Produit (nom, description, prix)
                          VALUES (:nom, :description, :prix)");
    $stmt->execute($data);
    return $pdo->lastInsertId();
}

function updateProduit($produit_id, $data) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE Produit SET nom = :nom, description = :description, prix = :prix
                          WHERE produit_id = :produit_id");
    $data['produit_id'] = $produit_id;
    return $stmt->execute($data);
}

function deleteProduit($produit_id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM Produit WHERE produit_id = :produit_id");
    $stmt->bindParam(':produit_id', $produit_id, PDO::PARAM_INT);
    return $stmt->execute();
}

// CRUD Operations for Activite Table
function getAllActivites() {
    global $pdo;
    $query = $pdo->query("SELECT * FROM Activite");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getActiviteById($activite_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM Activite WHERE activite_id = :activite_id");
    $stmt->bindParam(':activite_id', $activite_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addActivite($data) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO Activite (nom, description, date_debut, date_fin)
                          VALUES (:nom, :description, :date_debut, :date_fin)");
    $stmt->execute($data);
    return $pdo->lastInsertId();
}

function updateActivite($activite_id, $data) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE Activite SET nom = :nom, description = :description, date_debut = :date_debut, date_fin = :date_fin
                          WHERE activite_id = :activite_id");
    $data['activite_id'] = $activite_id;
    return $stmt->execute($data);
}

function deleteActivite($activite_id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM Activite WHERE activite_id = :activite_id");
    $stmt->bindParam(':activite_id', $activite_id, PDO::PARAM_INT);
    return $stmt->execute();
}

// CRUD Operations for Actualite Table
function getAllActualites() {
    global $pdo;
    $query = $pdo->query("SELECT * FROM Actualite");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getActualiteById($actualite_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM Actualite WHERE actualite_id = :actualite_id");
    $stmt->bindParam(':actualite_id', $actualite_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addActualite($data) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO Actualite (titre, contenu, date_publication)
                          VALUES (:titre, :contenu, NOW())");
    $stmt->execute($data);
    return $pdo->lastInsertId();
}

function updateActualite($actualite_id, $data) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE Actualite SET titre = :titre, contenu = :contenu
                          WHERE actualite_id = :actualite_id");
    $data['actualite_id'] = $actualite_id;
    return $stmt->execute($data);
}

function deleteActualite($actualite_id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM Actualite WHERE actualite_id = :actualite_id");
    $stmt->bindParam(':actualite_id', $actualite_id, PDO::PARAM_INT);
    return $stmt->execute();
}

// User Authentication Functions
function authenticateUser($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM Account WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUserRoles($account_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT type_name FROM AccountType
                          INNER JOIN AccountRole ON AccountType.account_type_id = AccountRole.role_id
                          WHERE AccountRole.account_id = :account_id");
    $stmt->bindParam(':account_id', $account_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_COLUMN);
}

function addUser($data) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO Account (username, password, email, account_type_id)
                          VALUES (:username, :password, :email, :account_type_id)");
    $stmt->execute($data);
    return $pdo->lastInsertId();
}

function updateUser($account_id, $data) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE Account SET username = :username, password = :password, email = :email, account_type_id = :account_type_id
                          WHERE account_id = :account_id");
    $data['account_id'] = $account_id;
    return $stmt->execute($data);
}

function deleteUser($account_id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM Account WHERE account_id = :account_id");
    $stmt->bindParam(':account_id', $account_id, PDO::PARAM_INT);
    return $stmt->execute();
}

function assignRoles($account_id, $roles) {
    global $pdo;
    // Clear existing roles for the account
    $stmt = $pdo->prepare("DELETE FROM AccountRole WHERE account_id = :account_id");
    $stmt->bindParam(':account_id', $account_id, PDO::PARAM_INT);
    $stmt->execute();

    // Insert new roles for the account
    foreach ($roles as $role) {
        $stmt = $pdo->prepare("INSERT INTO AccountRole (account_id, role_id)
                              VALUES (:account_id, (SELECT account_type_id FROM AccountType WHERE type_name = :role))");
        $stmt->bindParam(':account_id', $account_id, PDO::PARAM_INT);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        $stmt->execute();
    }
}


/*
// Retrieve an account by ID
function getAccountById($accountId) {
    $conn = getConnection();
    $sql = "SELECT * FROM account WHERE account_id = $accountId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// Add a new account
function addAccount($accountData) {
    $conn = getConnection();
    $sql = "INSERT INTO account (account_type_id, username, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $accountData['account_type_id'], $accountData['username'], $accountData['password']);
    $stmt->execute();
    $stmt->close();
}

// Update an account
function updateAccount($accountId, $accountData) {
    $conn = getConnection();
    $sql = "UPDATE account SET account_type_id = ?, username = ?, password = ? WHERE account_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issi", $accountData['account_type_id'], $accountData['username'], $accountData['password'], $accountId);
    $stmt->execute();
    $stmt->close();
}

// Delete an account
function deleteAccount($accountId) {
    $conn = getConnection();
    $sql = "DELETE FROM account WHERE account_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $accountId);
    $stmt->execute();
    $stmt->close();
}


// Retrieve all accounts
function getAllAccounts() {
    $conn = getConnection();
    $sql = "SELECT * FROM account";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $accounts = array();
        while ($row = $result->fetch_assoc()) {
            $accounts[] = $row;
        }
        return $accounts;
    } else {
        return array();
    }
}
*/

?>