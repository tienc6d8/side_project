<?php
    $arr = ['098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', '0163', '0162'];
//    strlestrlen($arr);
    foreach ($arr as $key => $value){
        $a = strlen($value);
        echo $a. "<br>";
    }