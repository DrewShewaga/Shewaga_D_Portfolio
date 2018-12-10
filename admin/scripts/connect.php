<?php



    $user = "root";
    $pw = "";

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=shewa690_portfolio;charset=utf8', $user, $pw);
        // var_dump($pdo);

    } catch(PDOException $exception) {
        echo 'connect error!'.$exception->getMessage();
        exit();
    }


?>