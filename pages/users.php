<?php include_once '../includes/header.php'; ?>
<?php include_once '../config/Users_retrieve.php'; ?>
<h1>Users</h1>

<?php 
    $accounts = getAllAccounts();
    if (count($accounts) > 0) {
        echo "<table>";
        echo "<tr><th>Account ID</th><th>Username</th><th>Password</th><th>Email</th><th>Role</th></tr>";
        foreach ($accounts as $account) {
            echo "<tr>";
            echo "<td>" . $account['account_id'] . "</td>";
            echo "<td>" . $account['username'] . "</td>";
            echo "<td>" . $account['password'] . "</td>";
            echo "<td>" . $account['email'] . "</td>";
            if ($account['account_type_id'] == 1) {
                echo "<td>Admin</td>";
            } else if($account['account_type_id'] == 2) {
                echo "<td>Manager</td>";
            } else {
                echo "<td>User</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No accounts found.</p>";
    }
?>

<form action="../config/add_r_accounts.php" method="post">
    <button type="submit">Add Users</button>
</form>

<?php include_once '../includes/footer.php'; ?>

