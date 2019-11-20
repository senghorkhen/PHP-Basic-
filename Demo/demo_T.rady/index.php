<?php
  include_once "connect.php";
  $sql = "select * from employees";
  $result = mysqli_query($connect,$sql);
//   var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Demo By T.Rady</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    <?php 
                        forEach($result as $value){
                    ?>
                    <tr>
                        <td><?php echo $value["EMPLOYEE_ID"];?></td>
                        <td><?php echo $value["FIRST_NAME"];?></td>
                        <td><?php echo $value["LAST_NAME"];?></td>
                        <td><?php echo $value["EMAIL"];?></td>
                        <td><?php  echo $value["PHONE_NUMBER"];?></td>
                    </tr>
                    <?php
                     }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>