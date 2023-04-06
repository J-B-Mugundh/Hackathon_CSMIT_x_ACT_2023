<?php
$n=$_POST["id"];
$o=$_POST["nit"];
$p=$_POST["phos"];
$q=$_POST["pota"];
$r=$_POST["type"];
$servername = "localhost";
$username = "root";
$pwd = "manager";
$dbname="lab_farmer";
$conn = new mysqli($servername, $username, $pwd,$dbname);
$stmt=$conn->prepare("insert into labtest_report(Farmer_id,Nitrogen,Phosphorous,potassium,soil_type)values(?,?,?,?,?)");
$stmt->bind_param("sssss",$n,$o,$p,$q,$r);
$stmt->execute();
?>