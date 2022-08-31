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
        <header class="register-header"></header>

        <main class="main-container">
            <div class="mobile-container left-register-container">
                <h1 class="left-register__header">Register</h1>
                <form method="post" class="form-container">
                    <label for="username" class="register-form__label">Username</label>
                    <input type="text" class="form__input register-form__input" name="username" placeholder="Enter text here" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
                    <?php echo isset($user_taken) ? "Username ". $username. " is taken." : "" ?>

                    <label for="firstname" class="register-form__label">First Name</label>
                    <input type="text" class="form__input register-form__input" name="firstname" placeholder="Enter text here" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">

                    <label for="lastname" class="register-form__label">Last Name</label>
                    <input type="text" class="form__input register-form__input" name="lastname" placeholder="Enter text here" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">

                    <label for="email" class="register-form__label">Email</label>
                    <input type="email" class="form__input register-form__input" name="email" placeholder="Enter text here" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">

                    <?php echo isset($email_taken)  ? "Email ". $email. " is taken." : "" ?>
                    <label for="password" class="register-form__label">Password</label>
                    <input type="password" class="form__input register-form__input" name="password" placeholder="Enter text here" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">

                    <input type="submit" class="submit submit--light register-form__submit" value="Submit" name="submit">
                </form>
            </div>
                    
            <div class="right-register-container"></div>
        </main>

        <footer class="register-footer"></footer>
    </body>
</html>
