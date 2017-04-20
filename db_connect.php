<?php

/* 
 * Variables de conexión
 */

define('DB_USER',"root");
define('DB_PASSWORD',"123456");
define('DB_DATABASE',"seletieneapp");
define('DB_SERVER',"localhost");

//Conexion
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) 
        or DIE ('Unable to Connect');

