<?php
require_once 'dbcon.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $Package_ID = $_GET['id'];
    $qry = "SELECT * FROM package WHERE Package_ID=" . $Package_ID;
    $res = $con->query($qry);
    $row = $res->fetch_assoc();

    if (!$row) {
        header("Location: view.php");
    }
    $PackageName = $row['Name'];
    $City = $row['City'];
    $Gender = $row['Gender'];
    $Username = $row['Username'];
    $Password = $row['Password'];
} else {
    $stuid = $_POST['StuId'];
    $Name = $_POST['Name'];
    $City = $_POST['City'];
    $Gender = "";
    if ($_POST['gender'] == 'male') {
        $Gender = "Male";
    } else {
        $Gender = "Female";
    }
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Payment = $_POST['Payment'];

    $qry = "UPDATE student SET Name= '" . $Name . "', City= '" . $City . "', Gender= '" . $Gender . "', Username= '" . $Username . "', Password= '" . $Password . "', Payment= '" . $Payment . "' WHERE StuID= " . $stuid;

    $res = $con->query($qry);
    if (!$res) {
        die("Error");
    } else {
        $msg = "Success";
        header("Location: view.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
</head>

<body>

    <body>
        <div class="d-flex justify-content-center vh-100 align-items-center ">
            <div class="card p-5">
                <h1>Update Here</h1>
                <hr>
                <form action="" method="POST">
                    <input type="hidden" name="StuId" value="<?php echo $row['StuID'] ?>">
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="Name" id="" class="form-control" required value="<?php echo $Name ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="form-label">City</label>
                        <input type="text" name="City" id="" class="form-control" required value="<?php
                                                                                                    echo $City ?>">
                    </div>

                    <div class="form-group  mt-3 mb-3">
                        <?php if ($Gender == "Male") { ?>
                            <input type="Radio" name="Gender" id="" value="Male" checked>
                            <label for="" class="form-label">Male</label>
                            <input type="Radio" name="Gender" id="" value="Female">
                            <label for="" class="form-label">Female</label>
                        <?php } else { ?>
                            <input type="Radio" name="Gender" id="" value="Male">
                            <label for="" class="form-label">Male</label>
                            <input type="Radio" name="Gender" id="" value="Female" checked>
                            <label for="" class="form-label">Female</label>
                        <?php } ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" name="Username" id="" class="form-control" required value="<?php
                                                                                                        echo $Username ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="text" name="Password" id="" class="form-control" required value="<?php
                                                                                                        echo $Password ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label for="" class="form-label">Payment</label>
                        <input type="text" name="Payment" id="" class="form-control" required value="<?php echo $Payment ?>">
                    </div>

                    <input type="Update" value="Update" class="btn btn-sm btn-primary w-100 mb-3">
                    <a href="view.php" class="btn btn-sm btn-success w-100 mb- 3">View</a>
                </form>
            </div>
        </div>




    </body>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>



    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];

        if ($msg == 123) {
            echo "
            <script>
            Swal.fire({
            title: 'deleted!',
            text: 'You clicked the button!',
            icon: 'success'
            });
            </script>";
        }
    }
    ?>

</html>