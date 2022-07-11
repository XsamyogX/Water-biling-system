<?php
    require('register-db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $name =stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $phonenumber =stripslashes($_REQUEST['phonenumber']);
        $phonenumber = mysqli_real_escape_string($con, $phonenumber);
        $address    = stripslashes($_REQUEST['address']);
        $address    = mysqli_real_escape_string($con, $address);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $query    = "INSERT into `users` (username, name, phonenumber, address, email, password)
                     VALUES ('')";
        $result   = mysqli_query($con, $query);
        ?>