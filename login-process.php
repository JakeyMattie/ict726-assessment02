<?php
    if (isset($_POST['log_in'])){
        //get database connection
        include("db_connect.php");

        //get values from form input
        $username = $_POST['username'];
        $password = sha1($_POST['password']);

        //select query
        $checkUser = "SELECT * FROM USER WHERE username='$username' AND password='$password'";

        //store query result in variables
        $result = mysqli_query($db_connection, $checkUser);

        if(mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_row($result);
            echo "User Found!";
            if($user[6] == 0){
                //echo "<br>Normal User";
                header("Location: register.php");
            }else{
                echo "<br>Admin!";
            }
        }else{
            echo "user not found!";
        }
    }
?>