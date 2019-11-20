<?php
    include_once "dbConnect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM  tbl_user WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result){
        header("Location: index.php");
    }else{
        echo "Cannot Delete";
    }
?>