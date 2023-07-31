<?php

$conn = mysqli_connect("localhost", "root", "", "university");

if (!$conn) {
    die("Connection Failed");
} else {
    echo("Connection Successful");
}

?>