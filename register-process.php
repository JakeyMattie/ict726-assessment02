<?php
    if(isset($_POST['submit'])){
        //set database connection
        include("db_connect.php");

        //get input values from form
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        //insert query
        $register_user = "INSERT INTO user (first_name, last_name, username, password, email, is_admin) VALUES ('$first_name', '$last_name', '$username', '$password', '$email', 0)";

        //run query and check for errors
        $result = mysqli_query($db_connection, $register_user);
        $err_no = $result.mysqli_errno($db_connection);
        $err_message = $result.mysqli_error($db_connection);

        if($err_no == 1062){
            if(strpos($err_message, 'email') !== false){
                $email_taken = TRUE;
                // echo "Email " . $email. " is already in use by a different account";
                header("register.php");
            }else if(strpos($err_message, 'username') !== false){
                // echo "Username ". $username. " is already please choose a different one";
                $user_taken = TRUE;
                header("Location: register.php");
            }
        }else if($err_no == 10){
            header("Location: login.php");
        }else{
            echo "ERROR CODE: " . $err_no . "<br> ERROR MESSAGE: " . $err_message;
        }
    }

?>