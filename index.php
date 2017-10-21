<?php
/*variable global para acceder a ficheros*/
define("ACCESS_SUCCESS", true);

/* inicio de formato a url */
$requestUrl = parse_url($_SERVER["REQUEST_URI"]);
$url = explode('/', $requestUrl["path"]);

if (empty($url[count($url) - 1])) {
    unset($url[count($url) - 1]);
    unset($url[0]);
} else {
    unset($url[0]);
}

$url = implode('/', $url);
$url = explode('/', $url);
/* fin de formato a url */

/* rutas */
require_once "config/config.php";
require_once "config/sites.php";
require_once "core/Connection.php";

/* fin de rutas */

/* cargar controladores */
/* configurar índice de la url */
$cIndex = CONTROLLER_INDEX;
$mIndex = METHOD_INDEX;
$pIndex = PARAM_INDEX;

if (($url[0] == LOCAL_NAME_PROYECT and ! isset($url[$cIndex])) or empty($url[0])) {
    /* cargar controlador de predeterminado */
    if (file_exists("controllers/" . DEFAULT_CONTROLLER . ".php")) {
        require_once "controllers/" . DEFAULT_CONTROLLER . ".php";
        $defaultController = DEFAULT_CONTROLLER;
        $controller = new $defaultController();
        if (method_exists($controller, "index")) {
            $controller->index();
        } else {
            require_once ERROR_404;
        }
    } else {
        require_once ERROR_404;
    }
} elseif (isset($url[$cIndex])) {
    /* cargar controlador si existe */
    if (file_exists("controllers/" . $url[$cIndex] . ".php")) {
        require_once "controllers/" . $url[$cIndex] . ".php";

        $controller = new $url[$cIndex]();

        /* si se solicita una función, verificar que exista */
        if (isset($url[2])) {
            if (method_exists($controller, $url[$mIndex])) {
                $method = $url[$mIndex];

                /* si se reciben parámetros, enviarlos como arreglo */
                if (isset($url[$pIndex])) {
                    $param = array();
                    for ($i = $pIndex; $i < count($url); $i++) {
                        $param[] = $url[$i];
                    }

                    $controller->$method($param);
                } else {
                    /* si no se reciben parámetros, 
                     * solo llamar la función */
                    $controller->$method();
                }
            } else {
                /* si la función no existe mostrar 404 */
                require_once ERROR_404;
            }
        } elseif (method_exists($controller, "index")) {
            /* si no se solicita una función, 
             * mostrar funcion predeterminada */
            $controller->index();
        } else {
            /* si no existe función index, mostrar error */
            require_once ERROR_404;
        }
    } else {
        /* si se solicita un controlador inexistente, mostrar 404 */
        require_once ERROR_404;
    }
}
?>