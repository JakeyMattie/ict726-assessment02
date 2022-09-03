<?php 
    session_start();
    if(isset($_SESSION['user'])){
        if(isset($_GET['id'])){
            echo $_SESSION['user'][0]; 
        }else{
            header("Location: search.php");
        }
    }else{
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <script src="" async defer></script>
    </head>

    <body class="flex-wrapper">
        <header>
            <?php include("nav.php"); ?>
        </header>
        <main class="main-container">
            <?php 
            if(isset($_GET["id"])){
                include("db_connect.php");
                $isbn = $_GET["id"];
                $query = "SELECT isbn, title, first_name, last_name, list_price, genre.name FROM book JOIN author ON book.author_id = author.author_id JOIN genre ON book.genre_id = genre.genre_id WHERE isbn = $isbn";
                $result = mysqli_query($db_connection, $query);
                while($row = mysqli_fetch_array($result)){
                    $ISBN = $row['isbn'];
                    $title = $row['title'];
                    $author = $row['first_name'] . " " . $row['last_name'];
                    $genre = $row['name'];
                    $list_price = $row['list_price'];
                }
            }           
            ?>
            <div class="mobile-container left-display">
                <h1 class="left-display__header header--big text--unbold text--italize"><?php echo $title ?></h1>
                <ul>
                    <li class="left-display__output"><span class="left-display__output--title">Author</span> <?php echo $author; ?></li>
                    <li class="left-display__output"><span class="left-display__output--title">Genre:</span> <?php echo $genre;?></li>
                    <li class="left-display__output"><span class="left-display__output--title">ISBN:</span> <?php echo $isbn;?></li>
                    <li class="left-display__output"><span class="left-display__output--title">List Price:</span> <?php echo $list_price;?></li>

                    <li class="left-display__output"><span class="left-display__output--title">Location:</span> <?php echo $list_price;?></li>
                </ul>

                <form action="display-process.php" method="post" class="form-container display-form">
                    <select name="display-bookcase" class="select">
                        <option>Bookcase #1</option>
                        <option>Bookcase #2</option>
                        <option>Bookcase #3</option>
                    </select>

                    <select name="display-shelf" class="select">
                        <option>Shelf #1</option>
                        <option>Shelf #2</option>
                        <option>Shelf #3</option>
                    </select>

                    <input type="submit" class="submit submit--dark submit--small" value="Add">
                </form>
            </div>

            <div class="right-display">
                <div class="display-blue01"></div>
                <img src="Photos/Book.jpg" class="display-photo">
                <div class="display-border--purple"></div>
                <div class="display-border--blue"></div>
                <div class="display-purple"></div>
                <div class="display-blue02"></div>
            </div>
        </main>
        
        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>