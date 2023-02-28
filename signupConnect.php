<?php
    require('php/db.php');
    
    if (isset($_POST['user'])) {
        $username = stripslashes($_REQUEST['user']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $age = stripslashes($_REQUEST['age']);
        $age = mysqli_real_escape_string($con, $age);
        $location = stripslashes($_REQUEST['location']);
        $location = mysqli_real_escape_string($con, $location);
        $number = stripslashes($_REQUEST['number']);
        $number = mysqli_real_escape_string($con, $number);
        $create_datetime = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, age, location, contact, datetime)
                     VALUES ('$username', '$password', '$email','$age','$location','$number', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "You are registered successfully.";
        } else {
            echo "Required fields are missing.";
        }
        return true;
    }else{
        echo "123456";
    }
?>