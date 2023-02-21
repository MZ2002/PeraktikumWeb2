<?php 


//buat array
$animals = ["Gama","Fauzi","widi","monyet"];
//tampilkan kucing 
echo $animals[0] . "<br>";
echo $animals[2] . "<br>";

//looping array 

foreach($animals as $animals){
    echo $animals . "<br>";
}

echo "<br>";

//buat array asisiatif 

$mahasiswa = ["nama"=>"Zidan","Umur"=>20,"Alamat"=>"Bogor",];

echo $mahasiswa ["nama"] . "<br>";

foreach ($mahasiswa as $key => $value)
    echo $key. ":" . $value;
    echo "<br>";
//buat array multidimensi

?>