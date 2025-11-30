<?php 

// Bilangan genap 1 - 20
echo "=====BILANGAN GENAP 1- 20=====<br>";
for ($i = 2; $i <= 20; $i+=2){
    echo $i ."<br>";
}

//Luas persegi panjang

echo "=====LUAS PERSEGI PAJANG=====<br>";
function persegiPanjang($panjang, $lebar){
    return $lebar * $panjang;
}

$luas = persegiPanjang(5, 10);
echo "Panjang = 5 <br>";
echo "Lebar =  10 <br>";
echo "Hasil:  $luas";

?>