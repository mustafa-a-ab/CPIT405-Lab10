<?php
/*
Name: Mustafa Abdu
Student ID: 2236470
Lab 10 - Task 3: Connect to MariaDB and list databases
*/

$host = "localhost";
$user = "root";
$pass = "";          // Put your MariaDB password here if set
$port = 3306;

$conn = new mysqli($host, $user, $pass, "", $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SHOW DATABASES;";
$result = $conn->query($sql);

echo "<h2>Databases in MariaDB</h2>";

if ($result && $result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row["Database"]) . "</li>";
    }
    echo "</ul>";
} else {
    echo "No databases found (or query failed).";
}

$conn->close();
?>
