<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Demo Form</title>

</head>

<body>
    <div class="d-flex justify-content-center vh-100 align-items-center ">
        <div class="card p-5">
            <h1>Booking Form</h1>
            <hr>
            <form action="" method="POST">
                <div class="form-group mb-3">
                    <label for="" class="form-label">Customer Name</label>
                    <input type="text" name="name" id="" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Mobile No</label>
                    <input type="text" name="mobile" id="" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Address</label>
                    <input type="text" name="address" id="" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="" class="form-label">Date</label>
                    <input type="date" name="date" id="" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Location</label>
                    <input type="text" name="location" id="" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Package</label>
                    <select name="package" id="" class="form-control" required>
                        <option value="Basic">Basic</option>
                        <option value="Standard">Standard</option>
                        <option value="Premium">Premium</option>
                    </select>
                </div>

                <input type="submit" value="Submit" class="btn btn-sm btn-primary w-100 mb-3">
                <a href="view.php" class="btn btn-sm btn-success w-100 ">View</a>
            </form>
        </div>
    </div>

    <!-- <button onclick="show()">Click</button> -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
    require 'dbcon.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $location = $_POST['location'];
        $package = $_POST['package'];


        $qry = "INSERT INTO booking (name, mobile, address, date, location, package) VALUES ('$name', '$mobile', '$address', '$date', '$location', '$package')";
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
        }

    }
    ?>
</body>




</html>