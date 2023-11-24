<?php

//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $message = $_POST['message'];


    $name;$email;$message;$captcha;
    if(isset($_POST['name'])){
        $name=$_POST['name'];
    }
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
    if(isset($_POST['message'])){
        $message=$_POST['message'];
    }
    if(isset($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
    }
    if(!$captcha){
        echo '<h2>Please go back and verify the box to make sure you\'re not a robot :)</h2>';
        exit;
    }
    $secretKey = "6LfS-YsUAAAAAOu9l43r70JS6AJ6Om6W89eJYDbU";
    $ip = $_SERVER['REMOTE_ADDR'];
    // post request to server
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response,true);
    // should return JSON with success as true
    if($responseKeys["success"]) {
        echo '<h2>Thank you! Your message has successfully been sent!</h2>';
    } else {
        echo '<h2>Robot Detected!</h2>';
    }

    $email_from = 'Epoxy Brothers';
    $email_subject = 'New message from Epoxy Brothers Contact';
    $email_body = "Name: $name.\n".
                  "E-mail: $email.\n".
                  "Message: $message.\n";

    $to = "DereweckiT@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: contact-us.php");