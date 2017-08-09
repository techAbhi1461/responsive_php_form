<?php

    $name_error = $email_error = $phone_error = $sub_error = $message_error = "";
    $name = $email = $phone = $subject = $message = "";

    function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}                                                                                                                                                                                                               

    if(empty($_POST["name"]))
    {
        $name_error = "Name is required";
    } 

    if(empty($_POST["email"]))
    {
        $email_error = "Email is required";
    } 

    if(empty($_POST["phone"]))
    {
        $phone_error = "Phone is required";
    } 

    if(empty($_POST["subject"]))
    {
        $sub_error = "";
    } 

    if(empty($_POST["message"]))
    {
        $message_error = "";
    } 

?>