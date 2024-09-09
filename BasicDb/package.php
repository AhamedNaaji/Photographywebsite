<?php
include '../BasicDb/dbcon.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $packname = $_POST["packName"];
    $packPrice = $_POST["packPrice"];

    $imageOneFileName = $_FILES["imgone"]["name"];
    $imageOneTempName = $_FILES["imgone"]["tmp_name"];
    $imageTwoFileName = $_FILES["imgtwo"]["name"];
    $imageTwoTempName = $_FILES["imgtwo"]["tmp_name"];

    $new_imageOneFileName = uniqid() . '_' . $imageOneFileName;
    $new_imageTwoFileName = uniqid() . '_' . $imageTwoFileName;

    move_uploaded_file($imageOneTempName, 'pack_images/' . $new_imageOneFileName);
    move_uploaded_file($imageOneTempName, 'pack_images/' . $new_imageTwoFileName);

    $multiImagesCount = count($_FILES["Multipleimg"]["name"]);
    $multiImagesArray = [];
    for ($i = 0; $i < $multiImagesCount; $i++) {
        $imageFileName = $_FILES["Multipleimg"]["name"][$i];
        $imageTempName = $_FILES["Multipleimg"]["tmp_name"][$i];
        $new_imageFileName = uniqid() . '_' . $imageFileName;
        move_uploaded_file($imageTempName, 'pack_images/' . $new_imageFileName);
        $multiImagesArray[] = $new_imageFileName;
    }
    $multiImageArray = json_encode($multiImagesArray);

    $qry = "INSERT INTO package(PackageName,Image_one,Image_two,Multiple_images,Package_price)VALUES('$packname','$new_imageOneFileName','$new_imageTwoFileName','$multiImageArray','$packPrice')";
    $con->query($qry);

    //echo $qry;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Package</title>

</head>

<body>
    <div class="d-flex justify-content-center vh-100 align-items-center ">
        <div class="card p-5">
            <h1>Registration</h1>
            <hr>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="" class="form-label">Package Name</label>
                    <input type="text" name="packName" id="" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Image One</label>
                    <input type="file" name="imgone" id="" class="form-control" accept=".jpg,.jpeg,.png">
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Image Two</label>
                    <input type="file" name="imgtwo" id="" class="form-control" accept=".jpg,.jpeg,.png">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="form-label">Multiple Images</label>
                    <input type="file" name="Multipleimg[]" id="" class="form-control" accept=".jpg,.jpeg,.png" Multiple>
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Package Price</label>
                    <input type="text" name="packPrice" id="" class="form-control" required>
                </div>

                <input type="submit" value="Submit" class="btn btn-sm btn-primary w-100 mb-3">
                <a href="view.php" class="btn btn-sm btn-success w-100 ">View</a>
            </form>
        </div>
    </div>

    <!-- <button onclick="show()">Click</button> -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>




</html>