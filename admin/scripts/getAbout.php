<?php

include 'connect.php';

$about_query = "SELECT * FROM tbl_about";

$get_about = $pdo->query($about_query);

$rows = array();

while ($row = $get_about->fetch()) {
    $rows[] = $row;
}



header('Content-Type: application/json; charset=UTF-8');
echo json_encode($rows);

?>