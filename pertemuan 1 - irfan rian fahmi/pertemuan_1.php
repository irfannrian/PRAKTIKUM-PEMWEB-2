<?php
  // Variable user
  $nama = 'sabiq';
  $umur = 20;
  $berat = 52;

  $nama = 'zaki';

  echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
  echo "<br />";
  echo "<h1 style='color: red'>Nama saya $nama, umur saya $umur, berat saya $berat</h1>";
  echo "<br />";

  // Variable sistem
  // variable built in php
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";

  // Variable konstan
  // adalah variable yang tidak bisa diubah nilainya
  define('makanan', 'sushi');
  // define('makanan', 'jambu');
  echo '<h1 style="color: blue">'.makanan.'</h1>';
  echo makanan;
?>