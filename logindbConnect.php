<?php
    require('php/db.php');

    if (isset($_POST['email'])) {
        $username = stripslashes($_REQUEST['email']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT id,username,email,age,password FROM `users` WHERE email='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        // echo mysqli_fetch_array($result);
        $rows = mysqli_num_rows($result);
        // echo ;
        if ($rows == 1) {
            $return_arr = array();
            while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
                $username = $row['username'];
                $name = $row['password'];
                $email = $row['email'];
            
                $return_arr[] = array("id" => $row['id'],
                                "username" => $row['username'],
                                "email" => $row['email'],
                                "age" => $row['age'],
                                "contact" => $row['contact'],
                                "location" => $row['location'],
                                "name" => $name);
            }
            echo json_encode($return_arr);            
            return json_encode($return_arr);
        } else {
            echo "Incorrect Username/password.";
        }
    }else{
        echo "1234567890";
    }

?>