<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$interest = $_POST['interest'];

echo $username."</br>";
echo $password."</br>";
echo $gender."</br>";
echo $status."</br>";
foreach($interest as $value) {
    echo $value;
}
?>