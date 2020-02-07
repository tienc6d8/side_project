<?php
    require_once "index.php";
class CheckPhoneNumber
{
    public $pattern = '/(09|01[2|6|8|9])+([0-9]{8})/';

    public function getValueForm()
    {
            if(isset($_POST['number']))
            {
                return $_POST['number'];
            }
            return;
    }

    public function getPattern()
    {
        $pattern = "";
        $phonenumber = $this->getValueForm();
        if(strlen($phonenumber == 10))
        {
            $pattern = '/^0\d{2}/';
        }
        if(strlen($phonenumber == 11))
        {
            $pattern = '/^01\d{2}/';
        }
        return $pattern;
    }

    public function getMatch()
    {
        $pattern = $this->getPattern();

        if(!empty($pattern))
        {
            preg_match($pattern,$this->getValueForm(), $mast);
            return $mast;
        }
        return;

    }
    public function getTyle()
    {
        if(isset($_POST['submit']))
        {
         try
         {
             $phonenumber = $this->getValueForm();
             if (empty($phonenumber))
             {
                 throw new exception ('Không được để trống!');
             }
             if(empty($this->getPattern())){
                 throw new exception ('Không phải số điện thoại!');
             }
             $



         }
         catch ()
         {

         }
        }
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