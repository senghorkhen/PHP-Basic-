<?php
    include_once "connect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result) {
        header('location: index.php');
    }else {
        echo "Cannot delete data!!!";
    }
?>