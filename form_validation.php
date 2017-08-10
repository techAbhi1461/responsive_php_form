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
    else{
        $name = test_input($_POST["name"]);

        if(!preg_match("/^[a-zA-z ]*$/",$name))
        {
            $name_error = "On;y letters and white space allowed";
        }
        
    }

    if(empty($_POST["email"]))
    {
        $email_error = "Email is required";
    } 
    else{
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $email_error = "Invalid email format"; 
        }
        
    }

    if(empty($_POST["phone"]))
    {
        $phone_error = "Phone is required";
    } 
    else{
        $phone = test_input($_POST["phone"]);

        if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
            $phone_error= "Phone number is not valid";// $phone is valid
        }
       
    }

    if(empty($_POST["subject"]))
    {
        $sub_error = "";
    } 
    else{
        $subject = test_input($_POST["subject"]);
    }

    if(empty($_POST["message"]))
    {
        $message_error = "";
    } 
    else{
        $message = test_input($_POST["message"]);
    }

    


?>