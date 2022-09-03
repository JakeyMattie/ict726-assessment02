<?php 
    session_start();
    if(isset($_SESSION['user'])){
        echo $_SESSION['user'][0]; 
    }else{
        header("Location: login.php");
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
            <?php include("nav.php");?>
        </header>
        
        <main class="index-container">
             <div class="index-images">
                 <img src="Photos/Index01.jpg" class="index-photo01">
                 <img src="Photos/Index02.jpg" class="index-photo02">
                 <img src="Photos/Index03.jpg" class="index-photo03">
                 <div class="index-border01"></div>
                 <div class="index-border02"></div>
                 <div class="index-blue"></div>
                 <div class="index-purple"></div>
             </div>
             <div class="index-content-container">
                 <h1 class="index-content__header header--big">Test Header</h1>
                 <p class="index-content__desc">Lorem ipsum something something subheading dolor sit amet.</p>
             </div>
        </main>

        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>