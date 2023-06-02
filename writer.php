<?php
include "db.php";

class Writer extends Db implements Table
{
    public $tblname = "writer";

    public function createTbl()
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->tblname(
            id int primary key auto_increment,
            first_name text,
            last_name text,
            middle_name text,
            birthdate varchar(20)
            )";
        $this->initialize();
        $this->sql($sql);

    }
}
?>