<?php 
//function
function hitungUmur($thn_lahir) {
    //code function
    $thn_sekarang = 2023;
    // hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    //tampilin umur
    echo $umur;


}

//panggil fungsi
echo "Umur Saya Adalah".hitungUmur(2002);


?>