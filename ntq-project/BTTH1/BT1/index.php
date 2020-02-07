<?php
require_once "Circle.php";
$show = new Circle();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .show {
            margin-top: 30px;
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label>Input Radius:</label>
            <input type="number" class="form-control" id="radius"  name="radius">
        </div>
        <input type="submit" class="btn btn-primary" value="Check" name="submit">
    </form>
</div>
<div class="container">
    <h3 class="show"><?php $show->validate(); ?></h3>
</div>
</body>
</html>