<?php

function send_email(){
    //EMAIL VALIDATION

    if(empty($_POST['name'])
        || empty($_POST['email'])
        || empty($_POST['message'])){

        header("Location: ../../contact.php?mail=error");
        exit;
    }


    $to = 'drew@shewaga.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: contact@shewaga.com';
    $headers .= '   Reply-To: '.$_POST['email'];

    mail($to, $subject, $message, $headers);
}

send_email();

header("Location: ../../contact.php?mail=success");

?>