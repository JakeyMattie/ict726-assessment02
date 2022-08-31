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
            <!-- Will update once the nav bar is working on one page-->
        </header>

        <main>
            <div class="mobile-container left-display">
                <h1 class="left-display__header">Book Title</h1>
                <ul>
                    <li class="left-display__output"><span class="left-display__output--title">Field #1:</span> Field Value</li>
                    <li class="left-display__output"><span class="left-display__output--title">Field #2:</span> Field Value</li>
                    <li class="left-display__output"><span class="left-display__output--title">Field #3:</span> Field Value</li>
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

                    <input type="submit" class="submit submit--dark" value="Submit">
                </form>
            </div>

            <div class="right-display"></div>
        </main>
        
        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>