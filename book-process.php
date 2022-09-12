<?php
    if(isset($_SESSION['user'])){
        $user_id=$_SESSION['user'][0];
    }

    if(isset($_POST['move'])){
        include("db_connect.php");
        $isbn = mysqli_real_escape_string($db_connection, $_POST['book-id']);
        if(empty($_POST['display-bookcase'])){
            $bc_error = "Please select a location!";
        }else{
            if($_POST['display-bookcase'] == 'heap'){
                $shelf_id = mysqli_real_escape_string($db_connection, $_POST['shelf-id']);
                $remove_from_shelf = "DELETE FROM shelf_book WHERE shelf_id = '$shelf_id'";
                $remove_from_shelf_result = mysqli_query($db_connection, $remove_from_shelf);
                $add_to_heap = "INSERT INTO heap (isbn, user_id)VALUES('$isbn','$user_id')";
                $add_to_heap_result = mysqli_query($db_connection, $add_to_heap); 
            }else{
                if(empty($_POST['display-shelf'])){
                    $shelf_error = "Please select a Shelf!";
                }else{
                    $shelf_id = mysqli_real_escape_string($db_connection, $_POST['display-shelf']);
                    $check_shelf = "SELECT * FROM shelf_book JOIN shelf ON shelf.shelf_id = shelf_book.shelf_id JOIN bookcase on bookcase.bookcase_id = shelf.bookcase_id WHERE isbn='$isbn' AND user_id='$user_id'";
                    $check_shelf_result = mysqli_query($db_connection, $check_shelf);
                    if(mysqli_num_rows($check_shelf_result) == 1){
                        $update_shelf = "UPDATE shelf_book SET shelf_id='$shelf_id' WHERE isbn='$isbn'";
                        //echo $update_shelf;
                        $update_shelf_result = mysqli_query($db_connection, $update_shelf);
                        header("Location: display.php?id=".$isbn);
                    }else{
                        $remove_from_heap = "DELETE FROM heap WHERE user_id='$user_id' AND isbn='$isbn'";
                        $remove_from_heap_result = mysqli_query($db_connection, $remove_from_heap);
                        $add_to_shelf = "INSERT INTO shelf_book (shelf_id, isbn) VALUES('$shelf_id','$isbn')";
                        $add_to_shelf_result = mysqli_query($db_connection, $add_to_shelf);
                        header("Location: display.php?id=".$isbn);
                    } 
                }
            }
        }
    }

?>