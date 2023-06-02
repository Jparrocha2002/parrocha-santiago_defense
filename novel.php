<?php
include "db.php";

class Novel extends Db implements Table
{
    public $tblname = "novel";

    public function createTbl()
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->tblname(
            id int auto_increment primary key,
            title text,
            status text,
            release_date text,
            description text
            )";
        $this->initialize();
        $this->sql($sql);

    }
}

?>