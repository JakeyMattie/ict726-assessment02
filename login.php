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

    <body>
        <header></header>

        <main class="main-container">
            <div class="left-login">
                <img src="Photos/Login.jpg" alt="A library photo">
            </div>
            <div class="right-login">
                <h1 class="login-header">Login</h1>
                <form action="login-process.php" method="post" class="login-form-container">
                    <input type="text" class="login-form-input" name="username" placeholder="Username">
                    <input type="password" class="login-form-input" name="password" placeholder="Password">
                    <input type="submit" id="submit-form-login" value="Sign In">
                </form>
                <p class="login-para">Don't have an account? <a href="register.php" class="login-link">Sign up now</a></p>
            </div>
        </main>

        <footer></footer>
    </body>
</html>