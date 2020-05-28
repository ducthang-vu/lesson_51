<?php
include __DIR__ . '../../../env.php';

//conncection
$conn = new mysqli($server_name, $username, $password, $db_name);
if ($conn && $conn->connect_error) {
    die('Error');
}

