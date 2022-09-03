<?php
    session_start();
    if(isset($_SESSION['user'])){
        header("Location: index.php");
    }

    if (isset($_POST['submit'])){
        //get database connection
        include("db_connect.php");
        
        $username_error = $password_error = "";
        $errors = 2;

        if(empty($_POST['username'])){
            $username_error = "Username cannot be blank!";
            $errors++;
        }else{
            $username = mysqli_real_escape_string($db_connection, $_POST['username']);
            unset($username_error);
            $errors--;
            // if(input_check($username, 'username')){
            //     $username_error = "Invalid username format";
            //     $errors++;
            // }else{
            //     unset($username_error);
            //     $errors--;
            // }            
        }

        if(empty($_POST['password'])){
            $password_error = "Password cannot be blank!";
            $errors++;
        }else{
            $password = mysqli_real_escape_string($db_connection, $_POST['password']);
            $hash = sha1($password);
            unset($password_error);
            $errors--;            
            // if(input_check($password, 'password')){
            //     $password_error = "invalid password format";
            //     $errors++;
            // }else{
                
            //     $hash = sha1($password);
            //     unset($password_error);
            //     $errors--;
            // }
        }  

        if($errors == 0){
            //select query
            $checkUser = "SELECT * FROM USER WHERE username='$username'";

            //store query result in variables
            $result = mysqli_query($db_connection, $checkUser);
            if(mysqli_num_rows($result) == 1){
                $user = mysqli_fetch_array($result);
                if($user[2] == $hash){
                    if($user[6] == 0){
                        session_start();
                        $_SESSION['user'] = $user;
                        header("Location: index.php");
                    }else{
                        echo "<br>Admin!";
                    }                
                }else{
                    $password_error = "Incorrect password.";
                    $errors++;
                }
            }else{
                    $username_error = "User not found.";
                    $errors++;
            }
        }
    }
?>