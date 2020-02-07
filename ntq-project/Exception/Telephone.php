<?php

class Telephone
{
    protected $viettel;
    protected $vinaPhone;
    protected $mobilePhone;
    public $inputNumber;

    function getViettel()
    {
        return $this -> viettel = array('098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', '0163', '0162');
    }

    function getVinaPhone()
    {
        return $this -> vinaPhone = array('091', '094', '0123', '0124', '0125', '0127', '0129');
    }

    function getMobilePhone()
    {
        return $this -> mobilePhone = array('090', '093', '0120', '0121', '0122', '0126', '0128');
    }

    public function getInputNumber()
    {
        try {
            if (isset($_POST['inputNumber'])) {
                return $this -> inputNumber = $_POST['inputNumber'];
            }
            throw new Exception('Phone number is empty!');
        } catch (Exception $exception) {
            echo 'Error' . $exception -> getMessage();
        }
    }

    function checkInputPhoneNumber($inputNumber)
    {
        try {
            if (preg_match('/^(09|01[2|6])+([0-9]{8})+$/', $inputNumber)) {
                return $inputNumber;
            } else {
                throw new Exception("Phone is valid! <br>");
            }
        } catch (Exception $exception) {
            echo 'Error :' . $exception -> getMessage();
        }
    }

    function getStringCompare($inputNumber)
    {
        if (strlen($inputNumber) == 10) {
            $stringUseToComPare = substr($inputNumber, 0, 3);
        } else {
            $stringUseToComPare = substr($inputNumber, 0, 4);
        }
        return $stringUseToComPare;
    }

    function checkTelephoneCommunicationNetwork($arrayUseToCompare)
    {
        try {
            if (in_array($arrayUseToCompare,$this -> getViettel())) {
                echo "Viettel";
            } elseif (in_array($arrayUseToCompare, $this -> getVinaPhone())) {
                echo "Viettel";
            } elseif (in_array($arrayUseToCompare, $this -> getMobilePhone())) {
                echo "Viettel";
            }else{
                throw new Exception('Phone number does not belong to any network!');
            }
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}