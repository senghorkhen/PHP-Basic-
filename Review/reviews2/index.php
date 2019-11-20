<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
           <a href="add.php">
           <button class="btn btn-primary" type="button">
            Add Student
                    <i class="material-icons float-right text-white">add</i>
            </button>
            </a>
            <hr>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Province</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
                <?php 
                    // Your PHP code here...
                    include_once "connect.php";
                    $query = "SELECT * FROM student";
                    $result = mysqli_query($connection, $query);

                    foreach ($result as $user) {

                   
                ?>
                    <tr>
                        <td><?php echo $user['id'];?></td>
                        <td><?php echo $user['name'];?></td>
                        <td><?php echo $user['province'];?></td>
                        <td><?php echo $user['gender'];?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $user['id'];?>">
                                <i class="material-icons text-success">edit</i>
                            </a>
                            <a href="delete.php?id=<?php echo $user['id'];?>" onclick="return confirm('Are you sure for delete?')"> 
                                <i class="material-icons text-danger">delete</i>
                            </a>
                        </td>
                    </tr>
                <?php
                    // your php code here...
                }
                ?>
            </table>
        </div>
    </div>
</div>