<?php

function send_email(){
    //EMAIL VALIDATION

    if(empty($_POST['name'])
        || empty($_POST['email'])
        || empty($_POST['message'])){

        echo 'You have not filled out all of the required fields';
        exit;
    }

   // if(!filter_var($))

    $to = 'drew@shewaga.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: '.$_POST['email'];
    $headers .= '   Reply-To: '.$_POST['name'];

    mail($to, $subject, $message, $headers);
}

send_email();

header("Location: ../../contact.php?mail=success");

?>