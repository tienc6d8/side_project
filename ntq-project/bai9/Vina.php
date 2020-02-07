<?php
require_once ('autoload.php');

class Vina extends Numberphone
{
    public function getNumberphone()
    {
        return array('091','094','0123', '0124', '0125', '0127', '0129');
    }
}