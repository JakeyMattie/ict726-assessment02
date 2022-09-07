<?php 
    session_start();
    if(isset($_SESSION['user'])){
        echo $_SESSION['user'][0];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Select Book</title>
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
            <div class="left-book background-image"></div>

            <div class="mobile-container right-book">
                <?php
                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    if(isset($_POST['proceed'])){
                        include("db_connect.php");
                        $shelf_id = mysqli_real_escape_string($db_connection, $_POST['shelf']);
                        $query = "SELECT shelf.shelf_name, book.title, book.isbn FROM shelf JOIN shelf_book ON shelf.shelf_id = shelf_book.shelf_id JOIN book ON shelf_book.ISBN=book.ISBN WHERE shelf.shelf_id = '$shelf_id';";
                        $result = mysqli_query($db_connection, $query);

                        if(mysqli_num_rows($result) == 0){
                            echo "<h2>Shelf currently doesn't have any books.</h2>";
                        }else{
                            $get_shelf = "SELECT shelf_name FROM shelf WHERE shelf_id = $shelf_id";
                            $shelf_result = mysqli_query($db_connection, $get_shelf);
                                while($row = mysqli_fetch_array($shelf_result)){
                                    $shelf_name = $row['shelf_name'];
                                }
                            ?>
                            <h1 class="header--big text--unbold text--italize text--capitalize"><?php echo $shelf_name; ?></h1>
                            <form action="display.php" method="post" z class="form-container bookcase-form-container">
                            <select name="id" class="select">
                                <?php                         
                                while($row = mysqli_fetch_array($result)){ ?>
                                    <option class="text--capitalize" value="<?php echo$row['isbn']; ?>"> <?php echo $row['title'] . " " . $row['isbn'];?> </option>
                                <?php } ?>
                            </select>
                            <div class="double-button-container">
                                <input type="submit" class="submit submit--dark" value="Proceed" name='proceed'>
                                <input type="submit" class="submit submit--remove" value="Delete">
                            </div>
                                </form>
                        <?php }
                    }
                }
                ?>
                <!-- <h1 class="header--big text--unbold text--italize">Books</h1>
                <form action="display.php" method="post" class="form-container bookcase-form-container">
                    <select name="bookcase" class="select">
                        <option>Book #1</option>
                        <option>Book #2</option>
                        <option>Book #3</option>
                    </select>
                    <div class="double-button-container">
                        <input type="submit" class="submit submit--dark" value="Proceed">
                        <input type="submit" class="submit submit--remove" value="Delete">
                    </div>
                </form> -->
            </div>
        </main>
    
        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>