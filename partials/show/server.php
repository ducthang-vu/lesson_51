<?php
include  __DIR__ .  '/../data/database.php';

//echo 'Hello database';

$id_room = 1;

$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

if ($conn && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
    //var_dump($room);
} elseif ($result) {
    echo 'No results';
} else {
    echo 'Query error';
}

// close db conncetion
$conn->close();