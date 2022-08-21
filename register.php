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

        <main>
            <div class="container left-register">
                <h1>Register</h1>
                <form action="register-process.php" method="post">
                    <label for="username"></label>
                    <input type="text" id="username-register" name="username" placeholder="Username">
                    <label for="firstname"></label>
                    <input type="text" id="firstname-register" name="firstname" placeholder="First Name">
                    <label for="lastname"></label>
                    <input type="text" id="lastname-register" name="lastname" placeholder="Last Name">
                    <label for="email"></label>
                    <input type="text" id="email-register" name="email" placeholder="Email">
                    <label for="password"></label>
                    <input type="password" id="password-register" name="password" placeholder="Password">
                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="container right-register">
                <img src="Photos/Register.jpg" alt="Register laptop photo">
            </div>
        </main>

        <footer></footer>
    </body>
</html>