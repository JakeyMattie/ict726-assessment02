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
        <header><?php include 'nav.php' ?></header>

        <main class="main-container">
            <div class="mobile-container addtolibrary-container">
                <h1 class="header--big text--italize text--unbold">Add Book</h1>
                <form method="post" class="form-container">
                    <div class="form-container--rows">
                        <!-- ISBN FIELD -->
                        <div class="mobile-container">
                            <label for="isbn" class="form__label bookcase-form__label">ISBN</label>
                            <input type="text" class="form__input bookcase-form__input" name="isbn" placeholder="Enter text here">
                        </div>

                        <!-- LIST PRICE FIELD -->
                        <div class="mobile-container">
                            <label for="list-price" class="form__label bookcase-form__label">List Price</label>
                            <input type="text" class="form__input bookcase-form__input" name="list-price" placeholder="Enter text here">
                        </div>
                    </div>

                    <!-- TITLE FIELD -->
                    <div class="mobile-container">
                        <label for="title" class="form__label bookcase-form__label">Title</label>
                        <input type="text" class="form__input bookcase-form__input" name="title" placeholder="Enter text here">
                    </div>

                    <div class="form-container--rows">
                        <!-- AUTHOR FN FIELD -->
                        <div class="mobile-container">
                            <label for="author-firstname" class="form__label bookcase-form__label">Author's First Name</label>
                            <input type="text" class="form__input bookcase-form__input" name="author-firstname" placeholder="Enter text here">
                        </div>

                        <!-- AUTHOR LN FIELD -->
                        <div class="mobile-container">
                            <label for="author-lastname" class="form__label bookcase-form__label">Author's Last Name</label>
                            <input name="author-lastname" class="form__input bookcase-form__input" name="isbn" placeholder="Enter text here">
                        </div>
                    </div>

                    <div class="form-container--rows">
                        <!-- PUBLISH DATE FIELD -->
                        <div class="mobile-container">
                            <label for="publish-date" class="form__label bookcase-form__label">Publish Date</label>
                            <input type="date" class="form__input bookcase-form__input" name="publish-date" required>
                        </div>

                        <!-- GENRE FIELD -->
                        <div class="mobile-container">
                            <label for="genre" class="form__label bookcase-form__label">Genre</label>
                            <input type="text" class="form__input bookcase-form__input" name="genre" placeholder="Enter text here">
                        </div>
                    </div>
                    
                    <input type="submit" class="submit submit--dark submit--small" value="Submit" name="submit">
                </form>
            </div>
        </main>

        <footer>
            <p>Copyright © 2022 <span class="footer--big-screen">| Developed by Jacob Antonio, Jake Calub, and Peter de Vera</span></p>
        </footer>
    </body>
</html>