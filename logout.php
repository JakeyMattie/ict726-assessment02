<?php
    include("db_connect");
    session_start();
    session_unset();
    session_destroy();
    mysqli_close($db_connection);
    header("Location: login.php");
?>