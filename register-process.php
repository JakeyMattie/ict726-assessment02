<?php
    if(isset($_POST['submit'])){
        //set database connection
        include("db_connect.php");

        //create empty variables
        $fn_error = $ln_error = $username_error = $password_error = $email_error = "";
        $errors = 5;

        //check each input if empty
        if(empty($_POST['firstname'])){
            $fn_error = "First name cannot be blank!";
            $errors++;
        }else{
            $first_name = mysqli_real_escape_string($db_connection, $_POST['firstname']);
            if(input_check($first_name, 'text')){
                $fn_error = "Only letters and white space allowed";
                $errors++;
            }else{
                unset($fn_error);
                $errors--;
            }
        }

        if(empty($_POST['lastname'])){
            $ln_error = "Last name cannot be blank!";
            $errors++;
        }else{
            $last_name = mysqli_real_escape_string($db_connection, $_POST['lastname']);
            if(input_check($last_name, 'text')){
                $ln_error = "Only letters and white space allowed";
                $errors++;
            }else{
                unset($ln_error);
                $errors--;
            }
        }
        
        if(empty($_POST['username'])){
            $username_error = "Username cannot be blank!";
            $errors++;
        }else{
            $username = mysqli_real_escape_string($db_connection, $_POST['username']);
            if(input_check($username, 'username')){
                $username_error = "Username must be at least 5-20 characters long. Allow - . or _";
                $errors++;
            }else{
                unset($username_error);
                $errors--;
            }
        }
        
        if(empty($_POST['password'])){
            $password_error = "Password cannot be blank!";
            $errors++;
        }else{
            $password = mysqli_real_escape_string($db_connection, $_POST['password']);
            if(input_check($password, 'password')){
                $password_error = "Password must be at least 8 characters long, contain one lowercase and uppercase letter, one number and one special character.";
                $errors++;
            }else{
                $hash = sha1($password);
                unset($password_error);
                $errors--;
            }
        }        

        if(empty($_POST['email'])){
            $email_error = "Email cannot be blank!";
            $errors++;
        }else{
            $email = mysqli_real_escape_string($db_connection, $_POST['email']);
            if(input_check($email, 'email')){
                $email_error = "Invalid email format!";
                $errors++;
            }else{
                unset($email_error);
                $errors--;
            }
        }
        
        if($errors == 0){
            //insert query
            $register_user = "INSERT INTO user (first_name, last_name, username, password, email) VALUES ('$first_name', '$last_name', '$username', '$hash', '$email')";

            //run query and check for errors
            $result = mysqli_query($db_connection, $register_user);
            $err_no = $result.mysqli_errno($db_connection);
            $err_message = $result.mysqli_error($db_connection);

            //check for error
            switch ($err_no){
                case 1062:
                    if(strpos($err_message, 'username') !== false){
                        $username_error = "Username " . $username . " is taken!";
                        $errors++;
                        break;
                    }else if(strpos($err_message, 'email') !== false){
                        $email_error = "Email " . $email . " is taken!";
                        $errors++;
                        break;
                    }                    
                case 10:
                    header("Location: login.php?success=TRUE");
                    break;
                default:
                    $errors++;
                    echo $err_no . "<br>" . $err_message;
                    break;
            }
        }
    }
?>