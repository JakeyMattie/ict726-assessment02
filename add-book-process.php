<?php

    if(isset($_POST['submit'])){
        include("db_connect.php");
        include("input-validation.php");
        $errors = 7;

        // ISBN input checking
        if(empty($_POST['isbn'])){
            $isbn_error = "ISBN cannot be empty!";
            $errors++;
        }else{
            $isbn = mysqli_real_escape_string($db_connection, $_POST['isbn']);
            if(is_numeric($isbn)){
                if(input_check($isbn, 'isbn')){
                    $isbn_error = "ISBN should be 13 digits!";
                    $errors++;
                }else {
                    unset($isbn_error);
                    $errors--;
                }
            }else{
                $isbn_error = "Only numbers 0-9 is allowed!";
                $errors++;                
            }
        }

        //list price input checking
        if(empty($_POST['list-price'])){
            $lp_error = "List price cannot be empty!";
            $errors++;
        }else{
            $list_price = mysqli_real_escape_string($db_connection, $_POST['list-price']);
            if(is_numeric($list_price)){
                unset($lp_error);
                $errors--;
            }else{
                $lp_error = "Only numbers 0-9 is allowed!";
                $errors++;
            }
        }

        //title input checking
        if(empty($_POST['book-title'])){
            $title_error = "Title cannot be empty!";
            $errors++;
        }else{
            $title = mysqli_real_escape_string($db_connection, $_POST['book-title']);
            if(input_check($title, 'normal')){
                $title_error = "Only letters and numbers are allowed!";
                $errors++;
            }else{
                unset($title_error);
                $errors--;
            }
        }

        //first name input checking
        if(empty($_POST['author-firstname'])){
            $fn_error = "First name cannot be empty!";
            $errors++;
        }else{
            $first_name = mysqli_real_escape_string($db_connection, $_POST['author-firstname']);
            if(input_check($first_name, 'text')){
                $fn_error = "Only letters and whitespace allowed!";
                $errors++;
            }else{
                unset($fn_error);
                $errors--;
            }
        }

        //last name input checking
        if(empty($_POST['author-lastname'])){
            $ln_error = "Last name cannot be empty!";
            $errors++;
        }else{
            $last_name = mysqli_real_escape_string($db_connection, $_POST['author-lastname']);
            if(input_check($last_name, 'text')){
                $ln_error = "Only letters and whitespace allowed!";
                $errors++;
            }else{
                unset($ln_error);
                $errors--;
            }
        }

        //publish date input checking
        if(empty($_POST['publish-date'])){
            $pd_error = "Publish date cannot be empty!";
            $errors++;
        }else{   
            $publish_date = mysqli_real_escape_string($db_connection, $_POST['publish-date']);
            if(input_check($publish_date, 'date')){
                $current_date = date("Y-m-d");
                if($publish_date > $current_date){
                    $pd_error = "Publish date cannot be greater than " . $current_date . "!";
                    $errors++;                
                }else{
                    unset($pd_error);
                    $errors--;
                }
            }else{
                $pd_error = "Invalid date format!";
                $errors++;                    
            }

        }

        if(empty($_POST['genre'])){
            $genre_error = "Please select a genre from the list!";
            $errors++;            
        }else{
            $genre = mysqli_real_escape_string($db_connection, $_POST['genre']);
            unset($genre_error);
            $errors--;
        }

        if($errors == 0){
            $check_author = "SELECT author_id FROM author WHERE first_name = '$first_name' AND last_name='$last_name'";
            $check_author_result = mysqli_query($db_connection, $check_author);
            if(mysqli_num_rows($check_author_result) == 1){
                while($row = mysqli_fetch_array($check_author_result)){
                    echo "<br>" . $row['author_id'];
                }
            }else{
                $add_author = "INSERT INTO author (first_name, last_name) values ('$first_name','$last_name')";
                $add_author_result = mysqli_query($db_connection, $add_author);
                $err_no = $add_author_result.mysqli_errno($db_connection);
                $err_message = $add_author_result.mysqli_error($db_connection);
                //check for error
                // switch ($err_no){                   
                //     case 10:
                //         //header("Location: login.php?success=TRUE");
                //         echo "success";
                //         break;
                //     default:
                //         $errors++;
                //         echo $err_no . "<br>" . $err_message;
                //         break;
                // }
            }

            $check_isbn = "SELECT isbn FROM book where isbn='$isbn'";
            $check_isbn_result = mysqli_query($db_connection, $check_isbn);
            if(mysqli_num_rows($check_isbn_result) == 1){
                $isbn_error = "The ISBN: " . $isbn . " already exists!";
                $errors++;
            }else{
                $check_author_result = mysqli_query($db_connection, $check_author);
                while($row = mysqli_fetch_array($check_author_result)){
                    $author_id = $row['author_id'];
                }
                $add_book = "INSERT INTO book (isbn, title, publish_date, genre_id, list_price, author_id) VALUES ('$isbn','$title','$publish_date','$genre','$list_price','$author_id')";
                $add_book_result = mysqli_query($db_connection, $add_book);
                $err_no = $add_book_result.mysqli_errno($db_connection);
                $err_message = $add_book_result.mysqli_error($db_connection);
    
                //check for error
                switch ($err_no){                 
                    case 10:
                        header("Location: display.php?id=" . $isbn);
                        break;
                    default:
                        $errors++;
                        echo $err_no . "<br>" . $err_message;
                        break;
                }
            }
        }
    }
?>