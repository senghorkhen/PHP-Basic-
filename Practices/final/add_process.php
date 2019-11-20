<?php
include_once "connection.php";
    if(isset($_POST['create'])) {
        $fullname = $_POST['fullname'];

        $query = mysqli_query($connection,"INSERT INTO db_php(fullname) VALUES('$fullname')");
        if($query == TRUE) {
            header("location: index.php");
        }else {
            echo "Cannot get data";
        }
    }
?>