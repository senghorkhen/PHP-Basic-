<?php
     include_once "connect.php";
     $id = $_GET['id'];
     $query = "DELETE FROM tbl_user WHERE id = $id";
?>