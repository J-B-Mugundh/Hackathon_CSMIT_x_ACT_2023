<?php

/*$db_user = "root";
$db_pass = "manager";
$db_name = "siemens";
$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/

$servername = "localhost";
$username = "root";
$password = "manager";
$database = "crops";
$conn = new mysqli($servername,$username,$password,$database);

?>