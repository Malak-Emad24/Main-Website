<?php
include 'db.php';

$sql = "ALTER TABLE user ADD COLUMN IF NOT EXISTS role ENUM('admin', 'user') DEFAULT 'user'";

if ($conn->query($sql)) {
    echo "<h1>Success!</h1>";
    echo "<p>The 'role' column has been added to your user table.</p>";
    echo "<p>Now you can go to phpMyAdmin and change your role to 'admin'.</p>";
} else {

    $sql_fallback = "ALTER TABLE user ADD COLUMN role ENUM('admin', 'user') DEFAULT 'user'";
    if ($conn->query($sql_fallback)) {
        echo "<h1>Success!</h1>";
    } else {
        echo "<h1>Error</h1>";
        echo "<p>" . $conn->error . "</p>";
        echo "<p>If the error says 'Duplicate column name', it means it already exists!</p>";
    }
}
?>
