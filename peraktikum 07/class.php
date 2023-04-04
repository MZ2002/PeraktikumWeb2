<?php

//CLASS BMI PASIEN

class bmipasien
{

    //bikin property
    public $nama, $berat, $tinggi, $umur, $jk;

    //construct
    function __construct($nama, $berat, $tinggi, $umur, $jk)
    {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }
    //bikin method 
    public function hasilBMI()
    {
        $tinggi_m = $this->tinggi / 100;
        // rumus
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi);
    }

    //bikin method
    public function statusbmi()
    {
        $bmi = $this->hasilBMI();
        if ($bmi < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat badan normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Obesitas";
        }
    }
}

//bikin konstrak
// $pasien = new bmipasien("zidan", "63", "170", "21", "L");
// echo "nama : " . $pasien->nama . "<br>";
// echo "bmi : " . $pasien->hasilBMI() . "<br>";
// echo "Status Bmi : " . $pasien->nama . "<br>
