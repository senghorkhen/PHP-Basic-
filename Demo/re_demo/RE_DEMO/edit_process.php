<?php
    include_once "connection.php";
        if(isset($_POST['edit'])) {
            $id = $_POST['id'];
            $fullname = $_POST['fullname'];

          $qurey = mysqli_query($connection,"UPDATE demo SET fullname = '$fullname' WHERE id = $id");
          if($qurey == TRUE) {
              header("location: index.php");
          }else {
             echo "Cannot update data!!!";
          }
        }
?>