<?php
    //let's get all form values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {//if user entered email is valid
            $receiver = "ayasmine500@gmail.com";
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
            $sender = "From: $email";
            if (mail($receiver, $subject, $body, $sender)) { //mail() is a built-in fn to send email
                echo "Your message has been sent successfully";
            } else {
                echo "Sorry, failed to send your message";
            }
            
        } else {
            echo "Enter a valid email address";
        }
        
    } else {
        echo "Email and password field is required";
    }
    
?>
