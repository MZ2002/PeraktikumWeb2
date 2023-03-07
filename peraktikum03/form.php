<?php

$nama = $_POST["nama"];
$skill = $_POST["skill"];
$skor = 0;
//buat logic nentui skor dari skill
foreach ($skill as $s)
    //cek skill nya
    switch ($s) {
        case 'html':
            $skor = $skor = 10;
            break;
        case 'css':
            $skor = $skor = 20;
            break;
        case 'javascrip':
            $skor = $skor = 20;
            break;
        case 'boostrap':
            $skor = $skor = 20;
            break;
        case 'php':
            $skor = $skor = 30
            break;
        case 'python':
            $skor = $skor = 30;
            break;
        case 'java':
            $skor = $skor = 50;
            break;
        default:
            # code...
            break;
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1>form pendaftaran</h1>
        <form method="POST" action="nama">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama: Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Prrograming</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skillp[]" id="skillp[]_0" type="checkbox" class="custom-control-input" value="html">
                        <label for="skillp[]_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skillp[]" id="skillp[]_1" type="checkbox" class="custom-control-input" value="css">
                        <label for="skillp[]_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skillp[]" id="skillp[]_2" type="checkbox" class="custom-control-input" value="javascrip">
                        <label for="skillp[]_2" class="custom-control-label">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skillp[]" id="skillp[]_3" type="checkbox" class="custom-control-input" value="php">
                        <label for="skillp[]_3" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skillp[]" id="skillp[]_4" type="checkbox" class="custom-control-input" value="java">
                        <label for="skillp[]_4" class="custom-control-label">JAVA</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skillp[]" id="skillp[]_5" type="checkbox" class="custom-control-input" value="python">
                        <label for="skillp[]_5" class="custom-control-label">Python</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        <?php 
        echo "Nama : ". $nama . "<br>"

        
        ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>