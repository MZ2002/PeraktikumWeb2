<?php 

    //echo "hallo word";


        $nama = "Muhammad Zidan";
        $jurusan = "Teknik Informatika";
        $Semester = 2;


            echo "nama saya adalah : " . $nama;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peraktikum</title>
</head>
<body>

    <h2> <?php echo $nama;?></h2>
    <p>
        saya kuliah di jurusan <?php $jurusan; ?>
    </p>

    <P> 
        saya ini semester <?php $Semester; ?>
    </p>
    
</body>
</html>