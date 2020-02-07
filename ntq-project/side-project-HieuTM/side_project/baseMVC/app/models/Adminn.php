<?php

class Adminn extends Db
{

    public function getAdmin($userAd, $passAd)
    {
        $sql = "SELECT * FROM admin WHERE username = '$userAd' AND password = '$passAd'";

        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {

            return true;
        }
        return false;
    }

    public function getAll($sql)
    {
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) {

                return $row;
            }
        } else {

            die('Khong the ket noi db');
        }
    }
}