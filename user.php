<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ./login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamark || Welcome <?= $_SESSION['username'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="secondaryB">
    <div class="container-fluid">
        <nav class="d-flex align-items-center justify-content-between mb-1 pt-2 container-fluid shadow border-bottom border-info">
            <h3 class="mediumT2 primaryC fw-bold ms-3">
                <a href="./">
                    LA<span class="tartiaryC">MARK</span>
                </a>
            </h3>
            <h5 class="fw-semibold me-md-5 d-none d-md-block">Hi <?= $_SESSION['username'] ?></h5>
        </nav>

        <?php require "./inc/sidebar.php" ?>
        <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                <h1 class="h2">Dashboard</h1>
                <div class=" mb-2 mb-md-0">
                    <form method="post" class="shadow d-flex" action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" >
                        <input type="search" name="result" class="form-control " placeholder="search price, location....">
                        <input type="submit" name="seach" value="Search" class="btn primaryB rounded-pill text-white fw-semibold">
                    </form>
                </div>
            </div>


            





        </main>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>