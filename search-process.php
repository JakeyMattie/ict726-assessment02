<?php 
    include("db_connect.php");
    if(isset($_POST["submit"])){
        $choice = $_POST["search"];

        if(empty($_POST["keyword"])){
            $keyword_error = "Keywords required";
        }else{
            $keyword = mysqli_real_escape_string($db_connection, $_POST['keyword']);
            include("db_connect.php");
            switch($choice){
                case "isbn":
                    $query = "SELECT isbn, title, first_name, last_name, list_price, genre.name FROM book JOIN author ON book.author_id = author.author_id JOIN genre ON book.genre_id = genre.genre_id WHERE  LOWER(isbn) LIKE LOWER('%$keyword%')";
                    break;
                case "title":
                    $query = "SELECT isbn, title, first_name, last_name, list_price, genre.name FROM book JOIN author ON book.author_id = author.author_id JOIN genre ON book.genre_id = genre.genre_id WHERE  LOWER(title) LIKE LOWER('%$keyword%')";
                    break;
                case "author":
                    $query = "SELECT isbn, title, first_name, last_name, list_price, genre.name FROM book JOIN author ON book.author_id = author.author_id JOIN genre ON book.genre_id = genre.genre_id WHERE  LOWER(first_name) LIKE '%$keyword%' OR LOWER(last_name) LIKE LOWER('%$keyword%')";
                    break;
                default:
                    break;
            }
            $result = mysqli_query($db_connection, $query);
        }
    }

    if(isset($_POST['add'])){
        echo "chosen book is " . $_POST["book_id"];
    }

?>