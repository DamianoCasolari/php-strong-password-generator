<?php

// include './function.php';
// session_start();


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
        <h1 class="my_title my_color">Password Generator</h1>
        <form class="d-flex flex-column justify-content-center align-items-center" action="password_page.php"
            method="get">
            <div class="container_length col-12 px-4">
                <label for="number_c" class="form-label my_color">Choose the number of characters for your new
                    password</label>
                <input type="number" class="form-control my-3" id="number_c" name="length" required autofocus>
            </div>
            <div class="container_filter d-flex justify-content-center ">
                <div class="col-6 px-4 d-flex justify-content-end align-items-start">
                    <div class="col-6 my_color">you can repeat a character multiple times</div>
                    <div class="text-end col-6">
                        <label for="repeat_yes" class="form-check-label my_color">Yes</label>
                        <input type="radio" class="form-check-inpu my-3" value="on" id="repeat_yes" name="repeat"
                            checked><br>
                        <label for="repeat_no" class="form-check-label my_color">No</label>
                        <input type="radio" class="form-check-inpu my-3" value="off" id="repeat_no" name="repeat">
                    </div>
                </div>
                <div class="col-6 px-4 d-flex justify-content-end align-items-start">
                    <div class=" col-6 my_color">what types of characters do you want in your password?</div>
                    <div class="text-end col-6">
                        <label for="Symbols" class="form-check-label my_color">Symbols</label>
                        <input type="checkbox" class="form-check-inpu my-3" id="Symbols" name="symbols" checked> <br>
                        <label for="Letters" class="form-check-label my_color">Letters</label>
                        <input type="checkbox" class="form-check-inpu my-3" id="Letters" name="letters" checked><br>
                        <label for="Numbers" class="form-check-label my_color">Numbers</label>
                        <input type="checkbox" class="form-check-inpu my-3" id="Numbers" name="numbers" checked>
                    </div>
                </div>
            </div>
            <div class="">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-danger" type="reset">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>