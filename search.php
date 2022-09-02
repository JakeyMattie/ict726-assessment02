<?php 
    include("search-process.php"); 
    include("add-to-bookcase-process.php"); 
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
            <?php include("nav.php");?>
        </header>

        <main class="mobile-container search-container">
            <h1>Search</h1>
            <?php 
                // session_start();
                // if(isset($_SESSION['user_id'])){
                //     echo $_SESSION['user_id']; 
                // }else{
                //     header("Location: login.php");
                // }
            ?>
            <form method="post" class="form-container search-form-container">
                <select name="search" class="search-form__dropdown">
                    <option value="isbn">ISBN</option>
                    <option value="title">Book Title</option>
                    <option value="author">Author</option>
                </select>
                <input type="text" class="form__input search-form__textfield" placeholder="Insert text here" name="keyword">
                <input type="submit" class="submit submit--dark" value="Submit" name="submit">
            </form>
            <?php if(isset($result)){ ?>
                <table>
                    <tr>
                        <th> </th>
                        <th>ISBN</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                    </tr>
                    <?php while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><input type="radio" name="book" value="<?php $row[0] ?>"></td>
                            <td><a href="display.php?id=<?php echo $row[0];?>"><?php echo $row[0]; ?></a></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2] . " " . $row[3]; ?></td>
                            <td><?php echo $row[4] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
            <!-- <div class="mobile-container search-output-container">
                <h2 class="search-output__header">Dropdown Choice</h2>
                <ul>
                    <li class="search-output__li">Output #1</li>
                    <li class="search-output__li">Output #2</li>
                    <li class="search-output__li">Output #3</li>
                </ul>
            </div> -->

            <form method="post" class="form-container add-to-bookcase-container">
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
            </form>
        </main>

        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>