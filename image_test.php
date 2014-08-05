<?php
session_start();
include(dirname(__FILE__).'/lib/fe/CAntiSpam.php');
$_SESSION[CAntiSpam::$session_var]=CAntiSpam::generateCode();
CAntiSpam::renderImage();
?>