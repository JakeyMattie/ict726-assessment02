<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Select Bookcase</title>
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

        <main class="main-container">
            <div class="left-bookcase background-image"></div>

            <div class="mobile-container right-bookcase">
                <h1 class="header--big text--unbold text--italize">Bookcases</h1>

                <form action="shelf.php" method="post" class="form-container bookcase-form-container">
                    <select name="bookcase" class="select">
                        <option>Bookcase #1</option>
                        <option>Bookcase #2</option>
                        <option>Bookcase #3</option>
                    </select>
                    <div class="double-button-container">
                        <input type="submit" class="submit submit--dark" value="Proceed">
                        <input type="submit" class="submit submit--remove" value="Delete">
                    </div>
                </form>

                <form action="bookcase.php" method="post" class="form-container bookcase-add-container">
                    <label for="username" class="form__label bookcase-form__label">Add Bookcase:</label>
                    <input type="text" class="form__input bookcase-form__input" name="username" placeholder="Enter text here">
                    <input type="submit" class="submit submit--dark submit--small" value="Add">
                </form>
            </div>
        </main>
        
        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>