<?php
if(isset($_POST['case']))
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $msg = "Name: $name \nEmail: $email \nMessage: $message";

    if (mail("shayanalam8931@gmail.com", "Contact Us Form", $msg)) {
        echo "<script>alert('Form Submit')</script>";
    } else {
        echo "<script>alert('Form Could not be Submit')</script>";
    }
