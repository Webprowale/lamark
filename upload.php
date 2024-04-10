<?php
$err =$err_tit = $err_loc= $title = $location = $description = $price = "";
if (isset($_POST['upload'])) {
    $title = htmlspecialchars(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
    $description = htmlspecialchars(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS));
    $price = htmlspecialchars(filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT));
    $location = htmlspecialchars(filter_input(INPUT_POST, 'location', FILTER_SANITIZE_SPECIAL_CHARS));
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $folder = "./images/". $image;
    
    if (empty($title) || empty($description) || empty($price) || empty($image)) {
        $err = "Input field is required!";
    }elseif(strlen($title) > 20){
     $err_tit = "Character can't be more than 20 character";
    }elseif(strlen($location) > 50){
        $err_loc = "Character can't be more than 50 character";
    }
     else {
        include('./inc/config.php');

        if (move_uploaded_file($image_temp, $folder)) {
            $sql = $con->prepare("INSERT INTO property (title,location, description, price, image) VALUES (?,?,?,?,?)");
            $sql->bind_param("sssss", $title, $location, $description, $price, $image);
            if ($sql->execute()) {
                echo "<script>alert('Upload is successful!');</script>";
            } else {
                echo "<script>alert('Error occurred while uploading!');</script>";
            }
            $sql->close();
        } else {
            echo "<script>alert('Error occurred while storing the image!');</script>";
        }

        mysqli_close($con);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamark</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="secondaryB">
    <form method='post' class=" rounded shadow d-flex flex-column mx-auto mt-5 py-3 px-5" style="background-color: transparent; max-width:35rem" enctype="multipart/form-data">
        <h3 class="text-center text-info mb-5">Upload Property</h3>
        <div class="mb-3">
            <input type="text" name="title" value="<?= $title ?>" placeholder="property title..." class="form-control">
            <small class="text-danger fw-semibold"><?= $err ?></small>
            <small class="text-danger fw-semibold"><?= $err_tit ?></small>
        </div>
        <div class="mb-3">
            <input type="text" name="location" value="<?= $location ?>" placeholder="property location..." class="form-control">
            <small class="text-danger fw-semibold"><?= $err ?></small>
            <small class="text-danger fw-semibold"><?= $err_loc ?></small>
        </div>
        <div class="mb-3">
            <textarea type="text" cols="5" rows="3"  name="description" value="<?= $description ?>" placeholder="property description..." class="form-control"></textarea>
            <small class="text-danger fw-semibold"><?= $err ?></small>
        </div>
        <div class="mb-3">
            <input type="text" name="price" value="<?= $price ?>" placeholder="property price..." class="form-control">
            <small class="text-danger fw-semibold"><?= $err ?></small>
        </div>
        <div class="mb-3">
            <input type="file" name="image" class="form-control" id="image">
            <small class="text-danger fw-semibold" id="imge"><?= $err ?></small>
            <small class="text-success fw-semibold" id="imgs"></small>
        </div>
        <input type="submit" name="upload" class="btn primaryB rounded-pill fw-semibold fs-5 text-white" value="Upload property">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
        const image = document.getElementById("image");
        let imgE = document.getElementById('imge');
        let imgS = document.getElementById('imgs');

        image.addEventListener("change", function() {
            if (image.files && image.files[0]) {
                const file = input.files[0];
                const fileSize = file.size;
                const maxSize = 1024 * 1024;
                if (fileSize > maxSize) {
                    imgS ='File size exceeds the maximum allowed size';
                    image.value = '';
                } else {
                    imgE = 'File size is within the limit';
                }
            }
        })
    </script> -->
</body>

</html>