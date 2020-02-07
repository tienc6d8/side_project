<?php
$pattern = '/(09|01[2|6|8|9])+([0-9]{8})/';
$sub  ="";
if($_SERVER['REQUEST_METHOD']=="GET")
{
    if(isset($_GET["submit"]))
    {
        if(preg_match($pattern,$_GET["number"]))
        {
            $sub = checkNumber($_GET["number"]);
        }
        else
        {
            $sub= "Invalid Number";
        }
    }
}

function checkNumber($str)
{
    $viettel =['viettel1'=>['098','097','096'],'viettel2'=>['0169','0168','0167','0166','0165','0164','0163','0162']];
    $vinaphone =['vina1'=>['091','094'],'vina2'=>[ '0123', '0124', '0125', '0127', '0129']];
    $mobiphone =['mobi1'=>['090','093'],'mobi2'=>['0120', '0121', '0122', '0126', '0128']];

    $type ="";
    $pattern1 = '/^0\d{2}/';
    $pattern2 = '/^01\d{2}/';
    preg_match($pattern2,$str,$match2);
    preg_match($pattern1,$str,$match1);
    if(strlen($str)==10)

    {
        if(checkTrueFalseNumberPhone($viettel,'viettel1',$match1[0])) $type = "Viettel";
        if(checkTrueFalseNumberPhone($mobiphone,'mobi1',$match1[0]))  $type =  "Mobi";
        if(checkTrueFalseNumberPhone($vinaphone,'vina1',$match1[0]))  $type =  "Vina";
    }
    else {
        if(checkTrueFalseNumberPhone($viettel,'viettel2',$match2[0])) $type = "Viettel";
        if(checkTrueFalseNumberPhone($mobiphone,'mobi2',$match2[0]))  $type =  "Mobi";
        if(checkTrueFalseNumberPhone($vinaphone,'vina2',$match2[0]))  $type =  "Vina";
    }
    return $type;
}
function checkTrueFalseNumberPhone($array,$key,$match)
{
    foreach ($array[$key] as $value)
    {
        if ($match == $value) return true;
    }
    return false;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="GET" name="submitform">
    Nhập số điện thoại của bạn:<br>
    <input type="text" name="number" >
    <input type="submit" name="submit">
    <br><?php echo $sub?>
</form>
</body>
</html>