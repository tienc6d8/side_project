<?php
require_once ('autoload.php');

class Mobi extends Numberphone
{
    public function getNumberphone()
    {
        return array('090','093','0120', '0121', '0122', '0126', '0128');
    }
}