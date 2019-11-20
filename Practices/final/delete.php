<?php
    include_once "connection.php";
    $id = $_GET['id'];
    $query = mysqli_query($connection,"DELETE FROM db_php WHERE id = $id");
    if($query){
        header("location: index.php");
    }else{
        echo "Cannot delete";
    }
?>