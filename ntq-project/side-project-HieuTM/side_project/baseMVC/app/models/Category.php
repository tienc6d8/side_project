<?php
require_once "All.php";
class Category extends All{
    public function fullTextSearchUsers($values)
    {
        $sql = "SELECT * from categorys WHERE  MATCH (categoryname,active) AGAINST('+$values' IN BOOLEAN MODE)";
        return $this->getAll($sql);
    }
}