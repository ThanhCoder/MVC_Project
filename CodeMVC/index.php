<?php
session_start();
require_once("./MVC/bridge.php");
//echo "123";
//echo $_GET["url"];
$class = new App();
$class->UrlProcess();
?>