<?php

class CheckPhoneNumber
{
    public $number;
    public $pattern = '/(09|01[2|6|8|9])+([0-9]{8})/';

    public function getValueFromFormSubmit()
    {
        if (isset($_POST['submit'])) {
            return $_POST['number'];                    // hàm lấy number trên form
        }
        return;

    }

    public function checkNumber()
    {
        if (preg_match($this->pattern, $this->getValueFromFormSubmit())) {
            return true;
        } else {                                                             // hàm check number có phải sđt ko
            return false;
        }
    }

    public function getPattern()
    {
        $pattenrn = "";
        if ($this->checkNumber()) {
            $phonenumber = $this->getValueFromFormSubmit();
            if (strlen($phonenumber) == 10) {                               // nếu 10 số thì lấy ra 3 số đầu, nếu 11 số lấy ra 4 số đầu.
                $pattern = '/^0\d{2}/';
            }
            if (strlen($phonenumber) == 11) {
                $pattern = '/^01\d{2}/';
            }
        }
        return $pattern;

    }

    public function getMatches()
    {
        $matches = "";
        $pattern = $this->checkNumber();
        $matches = preg_match ($pattern, $this->getValueFromFormSubmit(), $matches);  //hàm kiểm tra đầu số với sđt nhập từ form
        return $matches;

    }

    function checkType(){
        $matches = $this->getMatches();
        if(in_array($matches[0],$this->getViettel())) return "Viettel";
        if(in_array($matches[0],$this->getMobi())) return "Mobi";
        if(in_array($matches[0],$this->getVina())) return "Vina";
        return "Không phải 3 nhà mạng trên";
    }


    public function getViettel()
    {
        return array('098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', '0163', '0162');
    }

    public function getMobi()
    {
        return array('090', '093', '0120', '0121', '0122', '0126', '0128');
    }

    public function getVina()
    {
        return array('091', '094', '0123', '0124', '0125', '0127', '0129');
    }

}