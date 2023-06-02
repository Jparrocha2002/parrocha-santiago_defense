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

    public function insert($id, $title, $status, $release, $desc)
    {
        $insert = "INSERT INTO $this->tblname(id, title, status, release_date, description)
        VALUES($id,$title,$status,$release,$desc)";
        $this->sql($insert);
    }

    public function selectAll($id)
    {
        $data = "SELECT * FROM $this->tblname where id = $id";
        return $this->sql($data);
    }
}

?>