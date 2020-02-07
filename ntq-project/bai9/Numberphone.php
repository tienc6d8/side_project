<?php
require_once ('autoload.php');
require_once ('index.php');

class Numberphone
{
        protected $numberphone;

        public function getNumberphone()
        {

        }
        public function getPhoneFromFormSubmit()
        {
            if(isset($_POST['submit']))     return $_POST['number'];
            return;
        }


        public function validate()
        {
            if (isset($_POST['submit'])) {
                $phoneNumber = $this->getPhoneFromFormSubmit();
                $pattern = '/^(09|01[2|6|8|9])+([0-9]{8})$/';
                try {
                    if (empty($phoneNumber)) {
                        throw new Exception("Not empty");
                    }
                    if (!preg_match($pattern, $phoneNumber)) {
                        throw new Exception("Invalid Phone Number");
                    }
                 echo $this->getTypeNumber($phoneNumber);

                } catch (Exception $e) {
                    echo "Eror: " . $e->getMessage();
                }
            }
        }

        public function getPattern($phoneNumber)
        {
            $pattern="";
            if(strlen($phoneNumber)==10){
                $pattern = '/^0\d{2}/';
            }
            if(strlen($phoneNumber)==11){
                $pattern = '/^01\d{2}/';
            }

            return $pattern;

        }

        public function getMatch($phoneNumber)
        {
            $match = "";
            $pattern = $this->getPattern($phoneNumber);
            preg_match($pattern,$phoneNumber,$match);

            return $match;

        }
        public function getTypeNumber($phoneNumber)
        {
            $viettel = new Viettel();
            $mobi = new Mobi();
            $vina = new Vina();
            try{
                $match = $this->getMatch($phoneNumber);
                if(in_array($match[0],$viettel->getNumberphone()))  {return "Viettel";}
                if(in_array($match[0],$mobi->getNumberphone()))     {return "Vinaphone";}
                if(in_array($match[0],$vina->getNumberphone()))     {return "Mobiphone";}
                throw new Exception("Không phải 3 nhà mạng trên");
            }
            catch (Exception $ex){
                echo $ex->getMessage();
            }
        }
}


