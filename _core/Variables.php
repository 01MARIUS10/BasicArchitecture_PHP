<?php
define("URL",$_SERVER["REQUEST_URI"]);
define("URL_METHOD",trim($_SERVER["REQUEST_METHOD"],'/'));



define("URL_ROUTE",explode("?",URL)[0]);
define ("SERVER_ROUTE","http://".$_SERVER["SERVER_NAME"]."/" );

?>