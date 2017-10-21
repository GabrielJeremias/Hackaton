<?php

defined("ACCESS_SUCCESS") or die ("NO TIENES PERMISO PARA VER ESTO");

class MdlDashboard extends Connection
{
    public function getStudents()
    {
        $this->openConnection();
        $sql = "select * from alumno";
        $result = $this->dbConnection->query($sql);
        $data = array();
        $cont = 0;
        if($result->num_rows > 0) {
            while ($cont < $result->num_rows) {            
                $data[] = $result->fetch_assoc();
                $cont++;
            }
        } else {
            $data = NULL;
        }        
        $this->closeConnection();        
        return $data;
    }
    public function getStudent($id)
    {
        $this->openConnection();
        $id = $this->dbConnection->real_escape_string($id);
        $sql = "select * from alumno where matricula = '$id'";
        $result = $this->dbConnection->query($sql);
        $result = $result->fetch_array();
        $this->closeConnection();
        if($result == null)
        {
            return null;
        }
        return $result;
    }
}
