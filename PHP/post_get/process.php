<?php
    $name = $_POST['firstname'];
    $pwd = $_POST['password'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $checkbox = $_POST['interest'];
    

    echo "my name is ".$name ."<br>";
    echo "And has a password " .$pwd ."<br>";
    echo $gender ."<br>";
    echo $status ."<br>";
    foreach( $checkbox as $value) {
        echo $value. ",";
    }
    