<?php

require("lib/environment.php");
require("lib/router.php");
require("lib/helper.php");

$router = new Router($_SERVER['REQUEST_URI'],$_SERVER['SCRIPT_NAME'],$_SERVER{'DOCUMENT_ROOT'});
$router->route();
check_not_found($router); // in production mode this will throw a proper 404
include("views/layouts/".$router->layout.".php");

?>
