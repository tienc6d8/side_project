<?php
$pattern = '/(09|01[2|6|8|9])+([0-9]{8})/';
$string = '01642224058';
preg_match($pattern,$string,$match);

echo "<pre>";
print_r($match[0]);
echo "</pre>";