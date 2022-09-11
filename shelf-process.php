<?php
    include("db_connect.php");
    include("input-validation.php");
    $errors = 0;
    if(isset($_POST['add'])){
        if(empty($_POST['shelf_name'])){
            $shelf_error = "Shelf name cannot be blank!";
            $errors = 1;
        }else{
            $name = mysqli_escape_string($db_connection, $_POST['shelf_name']);
            $bookcase_id = mysqli_real_escape_string($db_connection, $_POST['bookcase_id']);
            if(input_check($name, 'normal')){
                $shelf_error = "Only letters, numbers, and white space allowed";
                $errors = 1;
            }else{
                $check_duplicate = "SELECT shelf_name FROM shelf where bookcase_id = '$bookcase_id';";
                $result = mysqli_query($db_connection, $check_duplicate);
                while($row = mysqli_fetch_array($result)){
                    if(strtolower($name) == strtolower($row[0])){
                        $shelf_error = $name . " already exists";
                        $errors = 1;
                        break;
                    }else{
                        $errors = 0;
                    }
                }
            }
        }

        if($errors == 0){
            $query = "INSERT INTO shelf (shelf_name, bookcase_id) VALUES ('$name','$bookcase_id');";

            $result = mysqli_query($db_connection, $query);
            $err_no = $result.mysqli_errno($db_connection);
            $err_message = $result.mysqli_error($db_connection);
    
            switch ($err_no){               
                case 10:
                    $success = "Shelf " . $name . " created.";
                    break;
                default:
                    echo $err_no . "<br>" . $err_message;
                    break;
            }
        }
    }
?>