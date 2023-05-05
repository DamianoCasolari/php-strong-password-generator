<?php

include './function.php'



    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random pasword</title>

    <!--link google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!--link font-awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"
        defer></script>
    <!-- link css  -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="my_container d-flex flex-column justify-content-center align-items-center p-5">
        <form class="d-flex flex-column justify-content-center align-items-center" method="get">
            <div class="my_background">
                <label for="number_c" class="form-label text-white">Choose the number of characters for your new
                    password</label>
                <input type="number" class="form-control my-3" id="number_c" name="length" required>

            </div>
            <div class="">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>

        <div class="psw_container text-white fs-2 mt-3 border border-1 rounded-4 px-5 py-3">
            <?= generatePasword($_GET['length']) ?>
        </div>
    </div>
</body>

</html>