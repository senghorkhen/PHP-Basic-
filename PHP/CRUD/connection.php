<?php

$connection = mysqli_connect("localhost","root","","phptest");

if(mysqli_connect_errno() != 0) {
    die("Failed connection");
}else {
    echo "Connection Successfully!!!";
    echo "</br>";
    echo "What I want to do for my future!!!";
}
?>