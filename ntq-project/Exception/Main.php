<?php
require_once 'main.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check phone number</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="number" name="inputNumber">
    <input type="submit" value="Check phone number">
</form>
<?php
$phone = new Telephone();
$input = $phone -> checkInputPhoneNumber($phone -> getInputNumber());
$input = $phone -> getStringCompare($input);
$phone->checkTelephoneCommunicationNetwork($input);
?>


</body>
</html>