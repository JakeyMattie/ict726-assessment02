<?php
    session_start();
    if(!isset($_SESSION['attempt'])){
        $_SESSION['attempt'] = 2;
    }
    if(isset($_SESSION['user'])){
        header("Location: index.php");
    }

    if (isset($_POST['submit'])){
        //get database connection
 
		//check if there are 3 attempts already
		if($_SESSION['attempt'] == 0){
			$_SESSION['error'] = 'Attempt limit reached. Try again after 1 minute.';
		}else{
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
            }
    
            if(empty($_POST['password'])){
                $password_error = "Password cannot be blank!";
                $errors++;
            }else{
                $password = mysqli_real_escape_string($db_connection, $_POST['password']);
                $hash = sha1($password);
                unset($password_error);
                $errors--;            
            }  

            if($errors == 0){
                //select query
                $checkUser = "SELECT * FROM USER WHERE username='$username' AND password='$hash'";
    
                //store query result in variables
                $result = mysqli_query($db_connection, $checkUser);
                if(mysqli_num_rows($result) == 1){
                    $user = mysqli_fetch_array($result);
                    session_start();
                    $_SESSION['user'] = $user;
                    header("Location: index.php");
                    unset($_SESSION['error']);            
                }else{
                    $_SESSION['attempt'] -= 1;
                    $counter_display = $_SESSION['attempt'] + 1;
                    $login_error = "Incorrect username and/or password. <br> Number of attempts left: " . $counter_display;
                    if($_SESSION['attempt'] == 0){
                        $_SESSION['attempt_again'] = time() + (5);
                        //note 5*60 = 5mins, 60*60 = 1hr, to set to 2hrs change it to 2*60*60
                    }
                    $errors++;
                }
            }
    
            // if($errors == 0){
            //     //select query
            //     $checkUser = "SELECT * FROM USER WHERE username='$username' ";
    
            //     //store query result in variables
            //     $result = mysqli_query($db_connection, $checkUser);
            //     if(mysqli_num_rows($result) == 1){
            //         $user = mysqli_fetch_array($result);
            //         if($user[2] == $hash){
            //                 session_start();
            //                 $_SESSION['user'] = $user;
            //                 header("Location: index.php");
            //                 unset($_SESSION['error']);            
            //         }else{
            //             $_SESSION['attempt'] -= 1;
            //             $password_error = "Incorrect username and/or password. <br> Number of attempts left: " . $_SESSION['attempt'];
            //             if($_SESSION['attempt'] == 0){
            //                 $_SESSION['attempt_again'] = time() + (5*60);
            //                 //note 5*60 = 5mins, 60*60 = 1hr, to set to 2hrs change it to 2*60*60
            //             }
            //             $errors++;
            //         }
            //     }else{
            //             $_SESSION['attempt'] -= 1;
            //             $username_error = "Incorrect username and/or password. <br> Number of attempts left: " . $_SESSION['attempt'];  
            //             if($_SESSION['attempt'] == 0){
            //                 $_SESSION['attempt_again'] = time() + (5*60);
            //                 //note 5*60 = 5mins, 60*60 = 1hr, to set to 2hrs change it to 2*60*60
            //             }
            //             $errors++;
            //     }
            // }
        }
       
    }
?>