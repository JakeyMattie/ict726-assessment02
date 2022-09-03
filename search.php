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
            <h1>Search</h1>
            <?php 
                session_start();
                if(isset($_SESSION['user'])){
                    echo $_SESSION['user'][0]; 
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
                <input type="text" class="form__input search-form__textfield" placeholder="Insert text here" name="keyword">
                <input type="submit" class="submit submit--dark" value="Submit" name="submit">
            </form>
            <?php if(isset($result)){ ?>
                <table>
                    <tr>
                        <th>ISBN</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                        <th>List Price</th>
                    </tr>
                    <?php while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><a href="display.php?id=<?php echo $row['isbn']; ?>"><?php echo $row['isbn']; ?></a></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['list_price'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>

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