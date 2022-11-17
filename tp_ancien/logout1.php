<?php
$user = "omega";
$password = "omega";
$database = "omega";
$table = "employee";
$conn= new PDO("pgsql:host=192.168.42.130;dbname=$database", $user, $password);
$_SESSION = [];
session_unset();
session_destroy();
header("Location: index.php");

