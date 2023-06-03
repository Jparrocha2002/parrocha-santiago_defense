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

    public function insert($title, $status, $release, $desc)
    {
        $insert = "INSERT INTO $this->tblname(id, title, status, release_date, description)
        VALUES(NULL, '$title', '$status', '$release', '$desc')";
        $this->sql($insert);
        var_dump($this->error());
    }

    public function fetch_novel($id) 
    {
        $all = $this->sql("SELECT * FROM $this->tblname WHERE id='$id");
        return $all->fetch_assoc();
    }

    public function getAll()
    {
        $all = $this->sql("SELECT * FROM $this->tblname ORDER BY id desc");
        var_dump($all);
        return $all->fetch_all(MYSQLI_ASSOC);
    }

    public function delete_novel($id) 
    {
        return $this->sql("DELETE FROM $this->tblname WHERE id = $id");
    }
}

?>