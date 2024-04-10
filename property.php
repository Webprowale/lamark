<?php
include("./inc/config.php");
$sql = $con->prepare("SELECT * FROM property");
$sql->execute();
$result = $sql->get_result();
$sql->close();
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lamark || Unlocking Doors</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body class="secondaryB">
  <div class="container-fluid pt-1 pb-3 ">
    <?php require "./inc/navber.php" ?>
    <div class="propHero pt-5 mt-5">
    <div id="overlay"></div>
      <div class="text-center mb-3">
        <h5 class="fw-bold mb-5 fs-2 text-primary"> Dream with us. <br><span class="fs-4">Begin
            your journey to a new chapter with us</span>
        </h5>
      </div>
      <div class="bg-info px-2 py-3 rounded shadow d-flex mx-auto" style="max-width: 40rem;">
        <input type="search" name="filter" placeholder="search by price, location...." class="form-control border-0 border-bottom border-info">
        <button type="submit" class="btn primaryB rounded-pill"><i class="fas fa-search"></i></button>
      </div>
    </div>
    <div class="contianer pt-5">
      <h6 class="fw-bold fs-2 text-center mb-3">All Property</h6>
      <div class="row px-md-5 px-2 align-items-center justify-content-center">
        <?php while ($row = $result->fetch_assoc()) : ?>
          <div class="col-md-6 col-lg-4 card secondaryB shadow">
            <img src="./images/<?=$row['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body text-white">
              <h5 class="card-title text-info"><?= $row['title'] ?></h5>
              <p class="card-text mb-0"><?= $row['location'] ?></p>
              <p class="fw-semibold">Price: <span class="text-info">$<?= $row['price'] ?></span></p>
              <a href="#" class="btn btn-primary fw-semibold">Book</a>
              <a href="#" class="btn btn-outline-primary fw-semibold">save</a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>