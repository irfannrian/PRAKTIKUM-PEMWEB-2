<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belanja Online</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
<form action="form_belanja.php" method="POST">
  <div class="form-group row">
    <label for="costumer " class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk _0" type="radio" class="custom-control-input" value="Tv"> 
        <label for="Produk _0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk _1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="Produk _1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk _2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="Produk _2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah " class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" class="btn btn-success" name="kirim">
    </div>
  </div>
</form>
		</div>
		<div class="col-md-4">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
        TV : 4.200.000
				</div>
				<div class="list-group-item">
					<p class="list-group-item-heading">
						Kulkas : 3.100.000
					</p>
					<p class="list-group-item-text">
                        Mesin Cuci : 3.800.000
					</p>
				</div>
                    <a href="#" class="list-group-item list-group-item-action active justify-content-between"> Harga Dapat Berubah Setiap Saat</a>
				</div>
		</div>
	</div>
</div>

<?php
$kirim = $_POST['kirim'];
$costumer = $_POST['costumer'];
$Produk = $_POST['Produk'];
$jumlah = $_POST['jumlah'];

if($Produk=="Tv") {
 $hargatv = 4200000;
 $total = $hargatv * $jumlah;
}elseif ($Produk=="kulkas") {
  $hargakulkas = 3100000;
  $total=$hargajumlah *$jumlah;
}elseif ($Produk=="Mesin Cuci") {
  $hargacuci = 3800000;
  $total = $hargacuci * $jumlah; 
} else{
  $total = 0;
}

echo 'Nama Costumer: '.$costumer;
echo '</br>Produk: '.$Produk;
echo '<br/>Jumlah: '.$jumlah;
echo '<br/>Total Harga: '.$total;



?>
</body>
</html>