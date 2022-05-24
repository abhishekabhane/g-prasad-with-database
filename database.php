<?php

    $error = "";
    if ($_POST) {
        if (!$_POST["email"]) {
            $error .= "An email address is required.<br>";
        }
        if (!$_POST["name"]) {
            $error .= "A name is required.<br>";
        }
        if (!$_POST["message"]) {
            $error .= "A subject is required.<br>";
        }
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "your email address is invalid. <br>";
        }
        if ($error != "") {
            $error = '<div class="alert alert-danger" role="alert"><strong>there was an error(s): </strong>' . $error . '</div>';
        }
    }

    $link = mysqli_connect("localhost" , "root" , "" , "testing");
    if (mysqli_connect_error()) {
        die ("there was an error connectiong to the database");
    }
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO testing (`email` , `name` , `message`)
        VALUES ('$email','$name','$message')";

        if (mysqli_query($link , $sql)) {
            echo '<div class="alert alert-success" role="alert">your request have been saved</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"> "Error:"' . $sql . "" . mysqli_error($link) .'</div>'; 
        }

        // SENDING MAIL
        // ini_set( 'display_errors', 1 );
        // ini_set("SMTP","ssl://smtp.gmail.com");
        // ini_set("smtp_port","465");
        // error_reporting( E_ALL );
        // $from = $email;
        // $to = "abhaneabhishek@gmail.com";
        // $subject = "Checking PHP mail";
        // $message = "PHP mail works just fine";
        // // $headers = "From:" . $from;
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // $headers = "From:" . $from;
        // if(mail($to,$subject,$message, $headers)) {
        //     echo "The email message was sent.";
        // } else {
        //     echo "The email message was not sent.";
        // }

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        
        $to = "abhaneabhishek@gmail.com";
        $subject = "Mail From website from" .$name;
        $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
        $headers = "From: noreply@yoursite.com" . "\r\n" .
        "CC: somebodyelse@example.com";
        if(mail($to,$subject,$message, $headers)) {
            echo "The email message was sent.";
            echo '<a href="./contact.php"><button class="btn btn-success">back</button></a> ';
        } else {
            echo "The email message was not sent.";
        }
        // if($email!=NULL){
        //     mail($to,$subject,$txt,$headers);
        // }
        //redirect
        // header("Location:index.html");

        mysqli_close($link);
    }
?>