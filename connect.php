<?php
$host = 'db';
$user = 'root';
$pass = 'MYSQL_ROOT_PASSWORD';
$db = 'job';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully! จ้าาาาา";
}
