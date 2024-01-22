<?php
include 'db_manager.php'; 

function generateRandomString($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

for ($i = 1; $i <= 30; $i++) {
    $username = "user{$i}";
    $password = password_hash(generateRandomString(), PASSWORD_DEFAULT); // Random password
    $email = "user{$i}@example.com";
    
    if ($i <= 2) {
        $account_type_id = 1;
    } elseif ($i <= 17) {
        $account_type_id = 2;
    } else {
        $account_type_id = 3; 
    }

    $data = [
        'username' => $username,
        'password' => $password,
        'email' => $email,
        'account_type_id' => $account_type_id,
    ];

    $newUserId = addUser($data);

    assignRoles($newUserId, ['Manager', 'Viewer']);
}

header("Location: ../pages/users.php");
exit;
?>
