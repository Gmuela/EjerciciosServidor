<?php

echo "request uri: ".$_SERVER["REQUEST_URI"]."<br/>";
echo "script name: ".$_SERVER["SCRIPT_NAME"];

$uri=$_SERVER["REQUEST_URI"];
$name=$_SERVER["SCRIPT_NAME"];

$uri=explode($uri,"/");
$name=explode($name,"/");

?>
