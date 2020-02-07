<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="./app/public/source/css/stylelogin.css">
    </li>
</head>
<body>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="./app/public/images/admin/admin.jpg" id="icon" alt="User Icon" style="width: 150px"/>
        </div>

        <!-- Login Form -->
        <form action="/baseMVC/Admin" method="post">
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="Enter your username"
                   required value="<?php if (isset($_COOKIE['username'])) {
                echo $_COOKIE['username'];
            } ?>">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="Enter your password"
                   required value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>">
            <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"
                           name="remember" <?php if (isset($_COOKIE['username'])) echo "checked" ?>> Remember me
                </label>

            </div>
            <br>
            <?php
            if (isset($data['eror'])) {
                echo "<span style='color: red'>" . $data['eror'] . "<span>";
            }
            ?>
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>
</body>
</html>
