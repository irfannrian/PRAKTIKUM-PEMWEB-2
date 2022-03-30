<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<style>

   body {
     background-color: salmon ;
   }
</style>


<nav class="navbar navbar-light bg-succes">
   <div class="container-fluid">
       <a class="navbar-brand">Form Nilai</a>
    </div>
</nav>

<form action="Nilai_Siswa.php" method="POST">
    <div class="form-group row">
        <label for="Nim" class="col-4 col-form-label">Nim</label>
        <div class="col-4">
            <input id="nim" name="nim" type="number" class="form-control">
        </div>
    </div>

    <div class="form-group row">
       <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label>
       <div class="col-4">
           <select id="matkul" name="matkul" class="custom-select">
               <option value="DDP">Dasar Dasar Pemrograman</option>
               <option value="BD1">Basis Data</option>
               <option value="WEB1">Pemrograman Web</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Nilai" class="col-4 col-form-label">Nilai</label>
        <div class="col-4">
            <input id="nilai" name="nilai" type="number" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" value="simpan" class= "btn btn-primary">submit</button>
        </div>
    </div>
</form>


<?php

require_once 'class_nilaimahasiswa.php';
if($_POST){
  $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
  $keterangan = $ns->hitungnilai();
  $hasil = $ns->grade($keterangan);
  $hasil2 = $ns->Predikat($keterangan);
    echo "Nim : " .$ns->nim;
    echo "<br>";
    echo "Matkul : " .$ns->matkul;
    echo "<br>";
    echo "Nilai : " .$ns->nilai;
    echo "<br>";
    echo "Status : " .$hasil;
    echo "<br>";
    echo "Grade : " .$hasil2;



}

?>

</body>
</html>