<?php
require_once "class_Persegipanjang.php";
$persegi1 = new Persegipanjang(10,5);
$persegi2 = new Persegipanjang(20,15);
echo "Luas Persegi panjang I ".$persegi1->getLuas();
echo "<br>Luas Persegi panjang II ".$persegi2->getLuas();
echo "<br>Keliling Persegi panjang I ".$persegi1->getKeliling();
echo "<br>Keliling Persegi panjang II ".$persegi2->getKeliling();
?>