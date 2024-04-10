<?php
if(isset($_POST['send'])){
    $name = htmlspecialchars(filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS));
    $subject = htmlspecialchars(filter_input(INPUT_POST,'subject', FILTER_SANITIZE_SPECIAL_CHARS));
    $message = htmlspecialchars(filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS));
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="unlocking the doors to your dream space" />
    <title>LaMark || Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="secondaryB">
    <div class="container-fluid pt-3 px-2 pb-5">
        <nav class="d-flex align-items-center justify-content-between mb-5 container-fluid shadow border-bottom border-info">
            <h3 class="mediumT2 primaryC fw-bold ms-3">
                <a href="./">
                LA<span class="tartiaryC">MARK</span>
                </a>
            </h3>
            <h5 class="fw-semibold me-md-5">Contact Us</h5>
        </nav>
        <div class="container my-3 shadow rounded px-md-5 px-2 py-4 border border-info" style="max-width: 30rem;">
        <div class="text-center mb-5">
            <h5 class="fs-4 fw-bold text-white">Contact Us</h5>
            <p class="fw-semibold mb-1">Expectional service and Expertise -the go-to real estate agency for finding your perfect home</p>
        </div>
        <form action="">
        <div class="form-floating mb-3" style="background-color: transparent;">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Enter your name..." style="background-color: transparent;">
            <label for="floatingInput" style="background-color: transparent;">Your Name...</label>
        </div>
        <div class="form-floating mb-3" style="background-color: transparent;">
            <input type="text" name="subject" class="form-control" id="floatingInput" placeholder="Enter your name..." style="background-color: transparent;">
            <label for="floatingInput" style="background-color: transparent;">Your subject...</label>
        </div>
        <textarea name="message" class="p-2 form-control text-white" placeholder='Enter message...' cols="50" rows="10" style="background-color: transparent;"></textarea>
        <input type="submit" name="send" value="Send" class="btn primaryB rounded-pill w-100 text-white fw-bold mt-2">
        </form>
        </div>
    </div>
</body>

</html>