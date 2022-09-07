<?php 
    if(isset($_POST["submit"])){
        $choice = $_POST["search"];
        $keyword = $_POST["keyword"];

        include("db_connect.php");

        switch($choice){
            case "isbn":
                $query = "SELECT isbn, title, first_name, last_name, genre FROM book JOIN author ON book.author_id = author.author_id WHERE  isbn LIKE '%$keyword%'";
                break;
            case "title":
                $query = "SELECT isbn, title, first_name, last_name, genre FROM book JOIN author ON book.author_id = author.author_id WHERE  title LIKE '%$keyword%'";
                break;
            case "author":
                $query = "SELECT isbn, title, first_name, last_name, genre FROM book JOIN author ON book.author_id = author.author_id WHERE  first_name LIKE '%$keyword%' OR last_name LIKE '%$keyword%'";
                break;
            default:
                break;
        }
        $result = mysqli_query($db_connection, $query);
    }

    if(isset($_POST['add'])){
        echo "chosen book is " . $_POST["book_id"];
    }

?>