<?php
require_once 'dbcon.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $bookingID = $_GET['id'];
    $qry = "SELECT * FROM booking WHERE ID=" . $bookingID;
    $res = $con->query($qry);
    $row = $res->fetch_assoc();

    if (!$row) {
        header("Location: view.php");
    } else {
        $name = $row['name'];
        $mobile = $row['mobile'];
        $address = $row['address'];
        $date = $row['date'];
        $location = $row['location'];
        $package = $row['package'];
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
            <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
            <div class="form-group mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" required value="<?php echo $name ?>">
            </div>

            <div class="form-group mb-3">
                <label for="" class="form-label">Mobile No</label>
                <input type="text" name="mobile" id="" class="form-control" required value="<?php
                echo $mobile ?>">
            </div>

            <div class="form-group mb-3">
                <label for="" class="form-label">Address</label>
                <input type="text" name="address" id="" class="form-control" required value="<?php
                echo $address ?>">
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Date</label>
                <input type="date" name="date" id="" class="form-control" required value="<?php
                echo $date ?>">
            </div>

            <div class="form-group mb-3">
                <label for="" class="form-label">Location</label>
                <input type="text" name="location" id="" class="form-control" required value="<?php echo $location ?>">
            </div>

            <div class="form-group mb-3">
                <label for="" class="form-label">Package</label>
                <select name="package" id="" class="form-control" required>
                    <option value="Basic" <?php if ($package == "Basic") { echo " Selected " ;} ?>  >Basic</option>
                    <option value="Standard" <?php if ($package == "Standard") { echo " Selected " ;} ?>>Standard</option>
                    <option value="Premium" <?php if ($package == "Premium") { echo " Selected " ;} ?>>Premium</option>
                </select>
            </div>

            <input type="submit" value="Update" class="btn btn-sm btn-primary w-100 mb-3">
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
<script>
    function show() {
        Swal.fire({
            title: 'Success',
            text: 'Data Inserted Successfully',
            icon: 'success',
            confirmButtonText: 'Confirm'
        });
    }
</script>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookingID = $_POST['ID'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $package = $_POST['package'];


    $qry = "UPDATE booking SET name= '" . $name . "', mobile= '" . $mobile . "', address= '" . $address . "', date= '" . $date . "', location= '" . $location . "', package= '" . $package . "' WHERE ID= " . $bookingID;
    //echo $qry;

    $res = $con->query($qry);
    if (!$res) {
        die("Error");
    }
    $mgs = "Success";
    //echo "Saved Successfully";
    //header("Location: index.php")
    if ($mgs == "Success") {
        echo "<script>show();</script>";
        header("Location: view.php");
    }

}
?>

</html>