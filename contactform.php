<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $phonenum = $_POST['number'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "Ckcharles93@yahoo.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location:index.html?mailsend");
}
?>