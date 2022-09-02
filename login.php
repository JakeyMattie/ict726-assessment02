<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
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

    <body class="background-color flex-wrapper">
        <header class="login-header"></header>

        <main class="main-container">
            <div class="left-login-container background-image"></div>
            <div class="mobile-container right-login-container">
                <h1 class="right-login__header header--big text--unbold">Login</h1>
                <form action="login-process.php" method="post" class="form-container login-form-container--gap">
                    <input type="text" class="form__input login-form__input" name="username" placeholder="Username">
                    <input type="password" class="form__input login-form__input" name="password" placeholder="Password">
                    <input type="submit" class="submit submit--light submit--small" i chavalue="Sign In">
                </form>
                <p class="right-login__para">Don't have an account? <a href="register.php" class="right-login__link text--bold">Sign up now</a></p>
            </div>
        </main>

        <footer class="login-footer"></footer>
    </body>
</html>