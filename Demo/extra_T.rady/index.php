<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
        <a href="insert.php" class="btn btn-info">Add New</a>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Province</th>
                <th>Action</th>
            </tr>
            <?php
                include_once "sql_connect.php";
                $query = "SELECT * FROM tb_extra";
                $result = mysqli_query($connect, $query);
                if($result) {
                    foreach($result as $user) {
                ?>   
                    <tr>
                        <td><?php echo $user['id']?></td>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['province']?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $user['id']?>" class="btn btn-danger btn-sm">Delete</a>
                            <a href="update.php?id=<?php echo $user['id']?>" class="btn btn-warning btn-sm">Update</a>
                        </td>
                    </tr>
                <?php
                    }
                }else {
                    echo "No";
                }
            ?>
        </table>
        </div>
    </div>
</div>