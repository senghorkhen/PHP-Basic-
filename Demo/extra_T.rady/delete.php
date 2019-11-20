<?php
    include_once "sql_connect.php";
    $id = $_GET['id'];
    echo $id;
    $query = "DELETE FROM tb_extra WHERE id = ".$id;
    $result = mysqli_query($connect, $query);
    if($result) {
        header("location: index.php");
    }else {
        echo "Cannot delete";
    }
?>