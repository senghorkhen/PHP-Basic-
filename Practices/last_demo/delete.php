<?php 
 $conn = mysqli_connect('localhost','root','','last_demo');
 $id = $_GET['userId'];
 $query = "DELETE FROM user WHERE id = '$id'";
 $result = mysqli_query($conn, $query);
 if($result) {
     header('location: index.php');
 }else {
     echo "Cannot delete";
 }