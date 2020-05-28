<?php
include  __DIR__ .  '/../data/database.php';

//echo 'Hello show';

$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_row > 0) {
    $rooms = [];
    while ($row = $result->fetch_assoc()) {
        /*var_dump($row);
        echo 'ID' . $row['id'] . ' - floor ' . $row['floor'] . '<br>';
        */
        $romms[] = $row;
    }
} elseif ($result) {
    echo 'No result ';
} else {
    echo 'Query error';
}

// close db conncetion
$conn->close();