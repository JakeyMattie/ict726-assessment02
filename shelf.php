<?php 
    session_start();
    if(isset($_SESSION['user'])){
        echo $_SESSION['user'][0]; 
        include("add-shelf-process.php");
    }else{
    }

    if(isset($_POST['proceed'])){
        //establish db connection
        include("db_connect.php");
        $bookcase = mysqli_real_escape_string($db_connection,$_POST['bookcase']);
        $query = "SELECT bookcase_id, bookcase_name FROM bookcase WHERE bookcase_id = '$bookcase';";
        $result = mysqli_query($db_connection, $query);
        while($row = mysqli_fetch_array($result)){
            $bookcase_name = $row['bookcase_name'];
            $_SESSION['bookcase'] = $row;
        }
    }
    
    if(isset($_SESSION['bookcase'][0])){
        $bookcase = $_SESSION['bookcase']['bookcase_id'];
        $bookcase_name = $_SESSION['bookcase']['bookcase_name'];
    }

    if(!isset($_POST['bookcase']) && !isset($_SESSION['bookcase'])){
        header("Location: index.php");
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Select Shelf</title>
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
            <div class="mobile-container left-shelf">
                <h1 class="header--big text--unbold text--italize text--capitalize"><?php echo $bookcase_name?></h1>
                <?php echo isset($success) ? $success : ""; ?>
                <?php 
                    $user_id = $_SESSION['user'][0];
                    $query = "SELECT * FROM shelf JOIN bookcase ON shelf.bookcase_id = bookcase.bookcase_id WHERE bookcase.user_id = '$user_id' AND bookcase.bookcase_id = '$bookcase'";
                    $result = mysqli_query($db_connection, $query);
                    if(mysqli_num_rows($result) == 0){ ?>
                        <h2>This bookcase does not have any shelves yet.</h2>
                    <?php }else{ ?>
                        <form action="book.php" method="post" class="form-container bookcase-form-container">
                            <select name="shelf" class="select">
                                <?php while($row = mysqli_fetch_array($result)){?>
                                    <option class="text--capitalize" value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                <?php } ?>
                            </select>
                            <div class="double-button-container">
                                <input type="submit" class="submit submit--dark" value="Proceed" name="proceed">
                                <input type="submit" class="submit submit--remove" value="Remove" name="remove">
                            </div>
                        </form>
                    <?php } ?>
                <form method="post" class="form-container bookcase-add-container">
                    <label for="shelf_name" class="form__label bookcase-form__label">Add Shelf:</label>
                    <?php echo isset($shelf_error) ? "<span>" . $shelf_error . "</span>" : "" ?>
                    <input type="text" class="form__input bookcase-form__input" name="shelf_name" placeholder="Enter text here">
                    <input type="hidden" name="bookcase_id" value="<?php echo $bookcase; ?>">
                    <input type="submit" class="submit submit--dark submit--small" value="Add" name="add">
                </form>
            </div>

            <div class="right-shelf background-image"></div>
        </main>
        
        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>