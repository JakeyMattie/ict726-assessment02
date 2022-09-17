<?php
    include("db_connect.php");

    function listRecords($result) {
        // $arrayResult = $result->fetch_array(MYSQLI_NUM);
        // echo "Records : ". mysqli_num_rows($result) . " / " . $arrayResult[0];
        $currentBookcase = '';
        while($row = mysqli_fetch_array($result)){  
            if ( $currentBookcase != $row['bookcase_name'] ) {
                echo "<h3 class='bookcase'>" . $row['bookcase_name'] . "</h3>";
                $currentBookcase = $row['bookcase_name'];
            } 
            if ( $row['shelf_name'] ) {
                echo "<h4 class='shelf'>" . $row['shelf_name'] . "</h4>";
                if ( $row['ISBN'] ) {
                    echo "<h5 class='book'><a href='/dashboard/display.php?id=" 
                        . $row['ISBN'] .  "'>" . $row['ISBN'] 
                        . "</a> (ISBN) - <span class='title'>Title:</span> " . $row['title'] 
                        . " - <span class='title'>Author:</span> " . $row['author'] . "</h5>";
                } else {
                    echo "<h5 class='noRecord'> No Book Found</h5>";
                }
            } else {
                echo "<h4 class='noRecord'> No Shelf Found</h4>";
            }
        }
    }
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

        <main class="mobile-container library-container">
            <?php 
                session_start();
                if(isset($_SESSION['user'])){
                    //echo $_SESSION['user'][0];
                    $user_id = $_SESSION['user'][0]; 
                }else{
                    header("Location: login.php");
                }
            ?>
            <h1 class="header--big text--unbold text--italize">Library</h1>
            <h2>Books in Bookcases</h2>
            
            <?php
                $query =  "SELECT b.*, s.shelf_name, sb.ISBN, b2.title, CONCAT(a.first_name, ' ' ,a.last_name) as author 
                            FROM bookcase as b  
                            LEFT JOIN shelf as s ON s.bookcase_id = b.bookcase_id 
                            LEFT JOIN shelf_book as sb ON sb.shelf_id = s.shelf_id 
                            LEFT JOIN book as b2 ON b2.ISBN = sb.ISBN 
                            LEFT JOIN author as a ON a.author_id = b2.author_id 
                            WHERE b.user_id = $user_id ORDER BY b.bookcase_name";
                

                $result = mysqli_query($db_connection, $query); 
                if(mysqli_num_rows($result) > 0) { 
                    echo "<hr class='horizontal-divider'/><div class='reportWrapper'>";
                    listRecords($result);
                    echo "</div>";
                } else {
                    echo "<h3 class='noRecord'>No Bookcase Found</h3>";
                }
            ?>
            

            <hr class="horizontal-divider"/>
            <h2>Books in Heaps</h2>
            <?php
                    $get_heap = "SELECT DISTINCT(heap.user_id), book.isbn, book.title, author.first_name, author.last_name, book.publish_date, genre.name from heap JOIN book on heap.user_id = book.user_id AND heap.isbn=book.isbn JOIN genre on book.genre_id=genre.genre_id JOIN author on author.author_id=book.author_id WHERE heap.user_id='$user_id';";
                    $get_heap_result = mysqli_query($db_connection, $get_heap);
                    if(mysqli_num_rows($get_heap_result) == 0){
                        echo "No Books in heap.";
                    }else{?>
                        <table>
                            <tr>
                                <th>ISBN</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                            <?php
                                while($row = mysqli_fetch_array($get_heap_result)){?>
                                <tr>
                                    
                                        <td><a href="display.php?id=<?php echo $row['isbn']?>"><?php echo $row['isbn'] ;?></a></td>
                                        <td><?php echo $row['title'] ;?></td>
                                        <td><?php echo $row['first_name'] . " " . $row['last_name'];?></td>
                                    
                                </tr>
                            <?php } ?>
                        </table>
            <?php } ?>
        </main>

        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>