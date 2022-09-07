<?php 
    include("search-process.php"); 
    include("add-to-bookcase-process.php"); 
?>
<!DOCTYPE html>
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

        <main class="mobile-container search-container">
            <h1 class="header--big text--unbold text--italize">Search</h1>
            <?php 
                session_start();
                if(isset($_SESSION['user'])){
                    //echo $_SESSION['user'][0]; 
                }else{
                    header("Location: login.php");
                }
            ?>
            <form method="post" class="form-container search-form-container">
                <select name="search" class="search-form__dropdown">
                    <option value="isbn">ISBN</option>
                    <option value="title">Book Title</option>
                    <option value="author">Author</option>
                </select>
                <span><?php echo isset($keyword_error) ? $keyword_error : ""?></span>
                <input type="text" class="form__input search-form__textfield" placeholder="Insert text here" name="keyword">
                <input type="submit" class="submit submit--dark" value="Submit" name="submit">
            </form>
            <?php if(isset($result) && mysqli_num_rows($result) > 0){ ?>
                <?php
                    switch($choice){
                        case "isbn":
                            echo "<h1 class='header--big text--unbold text--italize'>ISBN Matches</h1>";
                            echo "<div class='mobile-container search-result'>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<a href=display.php?id=" .$row['isbn'] .">".$row['isbn']."</a>";
                            }                            
                            echo "</div>";
                            break;
                        case "title":
                            echo "<h1 class='header--big text--unbold text--italize'>Book Title Matches</h1>";
                            echo "<div class='mobile-container search-result'>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<a href=display.php?id=" .$row['isbn'] .">".$row['title']."</a>";
                            }
                            echo "</div>";
                            break;
                        case "author":
                            echo "<h1 class='header--big text--unbold text--italize'>Author Matches</h1>";
                            echo "<div class='mobile-container search-result'>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<a href=display.php?id=" .$row['isbn'] .">".$row['first_name']." " . $row['last_name'] ." - ". $row['title'] . "</a>";
                            }
                            echo "</div>";
                            break;
                        default:
                            break;
                    }    
                    
                ?>
                <!-- </table> -->
                <?php }else{
                    if(isset($keyword)){
                        switch($choice){
                            case "isbn":
                                echo "<h2>No book with the ISBN: " . $keyword . "</h2>";
                                break;
                            case "title":
                                echo "<h2>No book with the title: " . $keyword . "</h2>";
                                break;
                            case "author":
                                echo "<h2>No book with the author:  " . $keyword . "</h2>";
                                break;
                            default:
                                break;                            
                        }
                    }
                }
            
            ?>

            <!-- <form method="post" class="form-container add-to-bookcase-container">
                <select name="select-bookcase" class="select">
                    <option>Bookcase #1</option>
                    <option>Bookcase #2</option>
                    <option>Bookcase #3</option>
                </select>

                <select name="select-shelf" class="select">
                    <option>Shelf #1</option>
                    <option>Shelf #2</option>
                    <option>Shelf #3</option>
                </select>
                <input type="submit" class="submit submit--dark" value="Add" name="add">
            </form> -->
        </main>

        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>