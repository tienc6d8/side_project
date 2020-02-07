<?php
require_once "All.php";
class User extends All
{

    public function fullTextSearchUsers($values)
    {
         $sql = "SELECT * from users WHERE  MATCH (fullname,username,email) AGAINST('+$values' IN BOOLEAN MODE)";
         return $this->getAll($sql);
    }
}