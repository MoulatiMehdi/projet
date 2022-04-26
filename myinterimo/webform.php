<?php
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['objectif'];
        $message = $_POST['message'];

        $to="mehdirigal2001@gmail.com";
        $body="";

        $body .="From: ".$userName."\r\n";
        $body .="Email: ".$userEmail. "\r\n";
        $body .="Message: ".$message."\r\n";

        mail($to,$messageSubject,$body);
        echo $_POST;
    ?>
