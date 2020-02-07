<?php
$pattern = '/(09|01[2|6|8|9])+([0-9]{8})/';
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    if (preg_match($pattern, $number)) {
        echo checkNumber($number);
    } else echo "Không phải là số điện thoại";
}
//public function checkNumber()
//{
//
//}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!--(09|01[2|6|8|9])+([0-9]{8})\-->
<!--^0\d{2}-->
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label>Check number</label>
            <input type="number" class="form-control" id="number" name="number">
        </div>
        <button type="submit" class="btn btn-primary">Check</button>
    </form>
</div>
</body>
</html>