<?php 
session_start();
require_once './mvc/Bridge.php';
$x=new App();

header("location:".URL."index");
?>