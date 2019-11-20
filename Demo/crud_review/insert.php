
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <div class="cara-body">
                        <form action="#" method="post">
                            <div class="form_group">
                            <!-- Name field -->
                                <label>Name</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form_group">
                            <!-- Province field -->
                                <label>Province</label>
                                <input type="text" name="province" class="form-control" required>
                            </div>
                            <!-- Button -->
                            <a href="index.php" class="btn btn-info">Go Back</a>
                            <button class="btn btn-primary float-right" type="submit" name="add">Add New</button>
                        </form>
                    </div>
                </div>
                <?php
                    include_once "connect.php";
                    if(isset($_POST['add'])) {
                        
                        //get value from input
                        $name = $_POST['user'];
                        $province = $_POST['province'];

                        //query
                        $query = "INSERT INTO student(name,province) VALUES('$name','$province')";
                        $result = mysqli_query($conn, $query);
                        if($result) {
                            header('location: index.php');
                        }else {
                            echo "Cannot insert";
                        }
                    }
                ?>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>