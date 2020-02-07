<?php

class All extends Db
{
    public function __construct()
    {
        parent::__construct();
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
    public function insert($sql){
        $result = mysqli_query($this->con,$sql);
        if($result){

            return true;
        }
        else {

            return false;
        }
    }
    public function update($sql){
        $result = mysqli_query($this->con,$sql);
        if($result){
            return true;
        }
        else {

            return false;
        }
    }
    public function delete($sql){
        $result = mysqli_query($this->con,$sql);
        if($result){
            return true;
        }
        else {

            return false;
        }
    }
    public function getAlll($sql)
    {
        $query = mysqli_query($this->con, $sql);
        if ($query) {
                return $query;
            }

        return false;
    }
}