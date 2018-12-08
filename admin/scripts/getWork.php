<?php

include 'connect.php';

$work_query = "SELECT * FROM tbl_work";

$get_work = $pdo->query($work_query);

$rows = array();

while ($row = $get_work->fetch()) {
    $rows[] = $row;
}



header('Content-Type: application/json; charset=UTF-8');
echo json_encode($rows);

?>
