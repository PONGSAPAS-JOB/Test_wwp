<?php
include 'connect.php';

class DB_con
{
    public $conn;

    public function __construct()
    {
        $this->conn = $GLOBALS['conn'];
    }

    public function showlist()
    {
        $result = mysqli_query($this->conn, "SELECT * FROM list_namewwp");
        return $result;
    }
}
