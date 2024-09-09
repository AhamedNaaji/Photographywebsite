<?php
require_once 'dbcon.php';
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
    <a href="index.php" class="btn btn-sm btn-success w-100 mb- 3">Register Page</a>
    <div class="d-flex justify-content-center vh-100 align-items-center ">
        <table class=" table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Date</th>
                    <th scope="col">Location</th>
                    <th scope="col">Package</th>
                    <th scope="col">Modifications</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $qry = "SELECT * FROM booking";
                $res = $con->query($qry);

                if (!$res) {
                    die("Data not found");
                } else {
                    while ($row = $res->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['ID'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['location'] ?></td>
                            <td><?php echo $row['package'] ?></td>
                            <td>
                                <a href='edit.php?id=<?php echo $row['ID'] ?>' class='btn btn-primary'>Edit</a>

                                <a href='delete.php?id=<?php echo $row['ID'] ?>' class='btn btn-danger'>Delete</a>
                            </td>
                        </tr>

                <?php

                    }
                }
                ?>
            </tbody>

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