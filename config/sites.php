<?php
defined("ACCESS_SUCCESS") or die("NO TIENES PERMISO PARA VER ESTO");

/* controladores */
if (!empty($url[CONTROLLER_INDEX])) {

    switch (strtolower($url[CONTROLLER_INDEX])) {        
        default:
            $requestController = $url[CONTROLLER_INDEX];
            $url[CONTROLLER_INDEX] = $url[CONTROLLER_INDEX];
            break;
    }
}

/* métodos */
if (!empty($url[METHOD_INDEX])) {
    switch (strtolower($url[METHOD_INDEX])) {  
        case "estudiante":
            $requestMethod = "getStudentInfo";
            $url[METHOD_INDEX] = $requestMethod;
            break;            
        default :
            $requestMethod = $url[METHOD_INDEX];
            $url[METHOD_INDEX] = $requestMethod;
            break;
    }
}
