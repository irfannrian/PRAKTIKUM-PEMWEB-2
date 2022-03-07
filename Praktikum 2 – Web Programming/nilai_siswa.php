<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Sistem Penilaian</a>
  </div>
</nav>
<form action="nilai_siswa.php" method="POST">
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="Nama" name="Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="Matkul" name="Matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BD1">Basis Data 1</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="Nilai_Uts" name="Nilai_Uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="Nilai_Uas" name="Nilai_Uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Tugas" class="col-4 col-form-label">Nilai Tugas / Praktkum</label> 
    <div class="col-8">
      <input id="Nilai_Tugas" name="Nilai_Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="Proses"/>
    </div>
  </div>
</form>

<?php


$Proses = $_POST["Proses"];
$Nama = $_POST["Nama"];
$MatKul = $_POST["Matkul"];
$Nilai_Uts = $_POST["Nilai_Uts"];
$Nilai_Uas = $_POST["Nilai_Uas"];
$Nilai_Tugas = $_POST["Nilai_Tugas"];
$nilai_akts = $Nilai_Uts * 0.3;
$nilai_akas = $Nilai_Uas * 0.35;
$nilai_akgas = $Nilai_Tugas * 0.3;
$nilai_akhir = $nilai_akts + $nilai_akas + $nilai_akgas;

if($nilai_akhir >=85 && $nilai_akhir <=100){
    $hasil = "A";
    $hsl = "Lulus";
    $nilai = "Sangat Memuaskan";
}elseif($nilai_akhir >=70 && $nilai_akhir <=84){
    $hasil = "B";
    $hsl = "Lulus";
    $nilai = "Memuaskan";
}elseif($nilai_akhir >=56 && $nilai_akhir <=69){
    $hasil = "C";
    $hsl = "Lulus";
    $nilai = "Cukup";
}elseif($nilai_akhir >=36 && $nilai_akhir <=55){
    $hasil = "D";
    $hsl = "Tidak Lulus";
    $nilai = "Kurang";
}else{
    $hasil = "E";
    $hsl = "Tidak lulus";
    $nilai = "Sangat Kurang";
}


echo 'Nama :'.$Nama;
echo '<br/>Mata Kuliah:'.$MatKul;
echo '<br/>Nilai UTS :'.$Nilai_Uts;
echo '<br/>Nilai UAS :'.$Nilai_Uas;
echo '<br/>Nilai Tugas :'.$Nilai_Tugas;
echo '<br/>Hasil :'.$hasil;
echo '<br/>Anda Dinyatakan :'.$hsl;
echo '<br/>Nilai Anda :'.$nilai
?>
</body>
</html>