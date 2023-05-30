<?php
// Bikin Class BMI Pasien
class bmipasien {
    // bikin property/variabel
    public $nama, $berat, $tinggi, $umur, $jk;

    // construct : data nya diset sesuai user
    function __construct($nama, $berat, $tinggi, $umur, $jk){
        // masukin nama
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;


    }

// bikin method (fungsi)
public function hasilBMI (){

    //LOGIC
    $tinggi_m = $this->tinggi / 100;
    //rumus bmi
    $bmi = $this->berat / ($tinggi_m * $tinggi_m);
    return round($bmi);
}

//bikin method
public function statusBMI(){
    // simpen data bmi
    $bmi = $this->hasilBMI();
    if ($bmi < 18.5) {
        return "Kekurangan Berat Badan";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        return "Normal (Ideal)";
    } elseif ($bmi >= 25 && $bmi <= 29.9) {
        return "Kelebihan Berat Badan"; 
    } else {
        return "Obesitas"; 
    }
    
}

}

// bikin objek
// $pasien = new bmipasien("Fauzi", "62", "170", "21", "L");
// echo "Nama : " . $pasien->nama . "<br>";
// echo "Bmi : " . $pasien->hasilBMI () . "<br>";
// echo "Status Bmi : " . $pasien->statusBMI() . "<br>";
?>