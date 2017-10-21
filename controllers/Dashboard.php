<?php
defined("ACCESS_SUCCESS") or die ("NO TIENES PERMISO PARA VER ESTO");

class Dashboard
{
    public function index()
    {
        require_once "models/MdlDashboard.php";
        $mdlDash = new MdlDashboard();
        $studentInfo = $mdlDash->getStudents();
        $contador = 1;
        require_once "views/dashboard.php";        
    }
    
    public function getConfig()
    {
        if (isset($_POST["data"])) {
            $file = "models/HackatonConfig.txt";    
            $array = file($file);     
            $config = array();
            foreach ($array as $data) {
                $config[] = trim($data);
            }

            if (isset($_COOKIE["conf"])) {
                $config[] = $_COOKIE["conf"];
            } else {        
                $config[] = "Sin registro";
            }

            echo json_encode($config);
        } else {
            require_once ERROR_404;
        }
    }
    
    public function setConfig()
    {
        if (isset($_POST["new-file"])) {
            $file = "models/HackatonConfig.txt";
            $config = $_POST["start-date"] . "\n";
            $config .= $_POST["finish-date"] . "\n";
            $config .= $_POST["location"] . "\n";
            $config .= $_POST["institution"];

            $cookie_name = "conf";
            $cookie_value = date("Y-m-d h:i:s A");
            setcookie($cookie_name, $cookie_value, time() + (60 * 60 * 24 * 30));

            file_put_contents($file, $config) or die("error");
            echo "save";
        } else {
            require_once ERROR_404;
        }
    }
    
    public function getStudentInfo($data = null)
    {
        if($data !=  null)
        {
            require_once "models/MdlDashboard.php";
            $mdlDash = new MdlDashboard();
            $studentInfo = $mdlDash->getStudent($data[0]);
            if($studentInfo != null){
                require_once "views/profile.php";
            } else {
                require_once ERROR_404;
            }
        } else{
            require_once ERROR_404;
        }
        
    }
}

