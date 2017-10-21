<?php
defined("ACCESS_SUCCESS") or die ("NO TIENES PERMISO PARA VER ESTO");

/* inicio configuración del proyecto */
define("BASE_URL", "http://localhost/hackaton2017/");
define("DEFAULT_CONTROLLER", "Register");
define("LOCAL_NAME_PROYECT", "hackaton2017");
define("CONTROLLER_INDEX", 1);
define("METHOD_INDEX", 2);
define("PARAM_INDEX", 3);
define("ERROR_404", "views/errors/error-404.php");
/* fin de la configuración del proyecto */

/* configuración de la base de datos */
define("HOST_NAME", "localhost");
define("DB_NAME", "hackaton");
define("DB_USER", "root");
define("DB_PASS", "");
/*fin de configuración de la base de datos*/