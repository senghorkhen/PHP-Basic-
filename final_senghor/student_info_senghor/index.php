<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final Exam of PHP Basic</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container mt-4">
        <div class="card shadow-lg">
            <div class="card-body">
                <a href="addStudent.php" class="btn btn-success">Add New Student</a>
                <hr>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            include_once "dbConnect.php";
                            $query = "SELECT * FROM tbl_student";
                            $result = mysqli_query($conn, $query);
                            $id = 1;
                            foreach ($result as $rows) {
                            
                        ?>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $rows['stu_name'];?></td>
                            <td><?php echo $rows['stu_email'];?></td>
                            <td><?php echo $rows['stu_gender'];?></td>
                            <td><?php echo $rows['stu_age'];?></td>
                            <td>
                                <a href="editStudent.php?stu_id=<?php echo $rows['stu_id'];?>" class="btn btn-success">Edit</a>
                                <a href="deleteStudent.php?stu_id=<?php echo $rows['stu_id'];?>" onClick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                        $id++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>