<?php 

class PersegiPanjang{  // Bikin class
    public $panjang, $lebar;  // Bikin property

    function __construct($panjang, $lebar){  // Bikin construct
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function luasPP(){  // Bikin method luas
        $luas = $this->panjang * $this->lebar;  // Bikin rumus luas
        return ($luas);
    }

    public function kelilingPP(){
         $keliling = 2 * ($this->panjang + $this->lebar);  // Bikin rumus keliling
         return($keliling);
    }
}


// $pp = new PersegiPanjang("20", "20");  // Buat objek

//             echo "Panjang : " . $pp->panjang . "<br>";
//             echo "Lebar : " . $pp->lebar . "<br>";
//             echo "Luas Persegi Panjang : " . $pp->luasPP() . "<br>";
//             echo "Keliling Persegi Panjang : " . $pp->kelilingPP() . "<br>";