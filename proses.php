<?php
// error_reporting(0);
$angka = $_GET['angka'];
$genap = array();
$ganjil = array();
function piramid($x, $y){
	if ($x > 0) {
		if ($y > 0) {
			echo "* ";
			$y--;
			piramid($x, $y);
		}
		else{
			echo "<br>";
			$x--;
			piramid($x, $x);
		}
	}
}
piramid ($angka, $angka);

echo "<br>";
for ($i = 1; $i <= $angka ; $i++) { 
    if ($i % 2 == 0) {
        array_push($genap, $i);
    }else {
        array_push($ganjil, $i);
    }
}   

echo "Genap : ";
for ($i = 0; $i < count($genap) ; $i++) { 
    echo $genap[$i];
}
echo "<br>";
echo "Ganjil : ";
for ($i = 0; $i < count($ganjil) ; $i++) { 
    echo $ganjil[$i];
}

echo "<br>";

echo "Jumlah deret genap : ".count($genap);
echo "<br>";
echo "Jumlah deret ganjil : ".count($ganjil);
?>
