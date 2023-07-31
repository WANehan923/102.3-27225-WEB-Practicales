<?php

$conn = mysqli_connect("localhost", "root", "", "university");

$id = $_REQUEST["id"];
$name = $_REQUEST["nam"];
$em = $_REQUEST["email"];
$pswrd = $_REQUEST["pw"];

$sql="INSERT INTO students(id,name,email,password) VALUES('$id', '$name', '$em', '$pswrd')";

if ($conn->query ($sql)=== TRUE)
{
    echo "success";
}
else
{
    echo "error";
}
?>