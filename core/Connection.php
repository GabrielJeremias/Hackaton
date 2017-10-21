<?php
defined("ACCESS_SUCCESS") or die ("NO TIENES PERMISO PARA VER ESTO");
class Connection
{
    protected $dbConnection;
    public function openConnection()
    {
        $this->dbConnection = new mysqli(HOST_NAME, DB_USER, DB_PASS, DB_NAME);
        $this->dbConnection->set_charset("utf8");
    }
    public function closeConnection()
    {
        $this->dbConnection->close();
    }
}