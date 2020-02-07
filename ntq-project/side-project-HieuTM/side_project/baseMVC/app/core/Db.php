<?php
class Db{
    public $con;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "side_project";

   function __construct()
    {
        $this->con = mysqli_connect($this->servername,$this->username,$this->password);
        if(!$this->con) die("Not connect database");
        else {
            mysqli_select_db($this->con, $this->dbname);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }
    }
}