<?php
    include("db_connect.php");
    include("input-validation.php");
    if(isset($_SESSION['user'])){
        $user_id = $_SESSION['user'][0];
    }else{
        header("Location: login.php");
    }

    $errors = 0;
    if(isset($_POST['add'])){
        if(empty($_POST['bookcase_name'])){
            $name_error = "Bookcase name cannot be blank!";
            $errors = 1;
        }else{
            $name = mysqli_escape_string($db_connection, $_POST['bookcase_name']);
            if(input_check($name, 'normal')){
                $name_error = "Only letters, numbers, and white space allowed";
                $errors = 1;
            }else{
                $check_duplicate = "SELECT * FROM bookcase where user_id = '$user_id';";
                $result = mysqli_query($db_connection, $check_duplicate);
                while($row = mysqli_fetch_array($result)){
                    if(strtolower($name) == strtolower($row[1])){
                        $name_error = $name . " already exists";
                        $errors = 1;
                        break;
                    }else{
                        $errors = 0;
                    }
                }
            }
        }

        if($errors == 0){
            $query = "INSERT INTO bookcase (bookcase_name, user_id) VALUES ('$name','$user_id');";

            $result = mysqli_query($db_connection, $query);
            $err_no = $result.mysqli_errno($db_connection);
            $err_message = $result.mysqli_error($db_connection);
    
            switch ($err_no){               
                case 10:
                    $success = "Bookcase " . $name . " created.";
                    break;
                default:
                    echo $err_no . "<br>" . $err_message;
                    break;
            }
        }
    }
?>