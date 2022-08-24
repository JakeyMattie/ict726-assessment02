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

    <body>
        <header></header>

        <main>
            <h1>Search</h1>

            <form action="search-process.php" method="post" id="search-form-container">
                <select name="search" id="search-form__dropdown">
                    <option>ISBN</option>
                    <option>Book Title</option>
                    <option>Author</option>
                </select>
                <input type="text" id="search-form__textfield" placeholder="Insert text here">
                <input type="submit" id="search-form__submit" value="Submit">
            </form>

            <div class="search-output-container">
                <h2 class="search_output__header">Dropdown Choice</h2>
                <ul>
                    <li class="search-output__li">Output #1</li>
                    <li class="search-output__li">Output #2</li>
                    <li class="search-output__li">Output #3</li>
                </ul>
            </div>

            <form action="add-to-bookcase-process.php" method="post" id="add-to-bookcase">
                <select name="select-bookcase" id="select-bookcase">
                    <option>Bookcase #1</option>
                    <option>Bookcase #2</option>
                    <option>Bookcase #3</option>
                </select>

                <select name="select-shelf" id="select-shelf">
                    <option>Shelf #1</option>
                    <option>Shelf #2</option>
                    <option>Shelf #3</option>
                </select>

                <input type="submit" id="select-form__submit" value="Submit">
            </form>
        </main>

        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>