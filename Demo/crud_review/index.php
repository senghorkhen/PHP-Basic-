<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <a href="insert.php" class="btn btn-info">Add New</a>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Province</th>
                    <th>Action</th>
                </tr>
                <?php
                    include_once "connect.php";
                    $query = "SELECT * FROM student";
                    $result = mysqli_query($conn, $query);
                    if($result) {
                        foreach ($result as $data) {
                    ?>
                        <tr>
                            <td><?php echo $data['id']?></td>
                            <td><?php echo $data['name']?></td>
                            <td><?php echo $data['province']?></td>
                            <td>
                                <a href="update.php?id=<?php echo $data['id'];?>" class="text-success">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a href="delete.php?id=<?php echo $data['id'];?>" class="text-danger" onclick="return confirm('Are you sure for delete?')">
                                    <i class="material-icons">delete</i>
                                </a>
                            </td>
                        </tr>
                    <?php
                        }
                    }else {
                        echo "Cannot select data";
                    }
                ?>
            </table>
        </div>
    </div>
</div>