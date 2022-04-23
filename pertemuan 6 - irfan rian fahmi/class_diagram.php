<?php
include_once 'class_pasien.php';
include_once 'class_bmi.php';
include_once 'class_bmipasien.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="#" method="POST">
                <div class="form-group row">
                    <label for="id" class="col-4 col-form-label">ID</label>
                    <div class="col-8">
                        <input id="id" name="id" placeholder="ID" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label">Kode</label>
                    <div class="col-8">
                        <input id="kode" name="kode" placeholder="Kode" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Kimi no Nawa" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
                    <div class="col-8">
                        <input id="tinggi" name="tinggi" placeholder="(cm)" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berat" class="col-4 col-form-label">Berat Badan</label>
                    <div class="col-8">
                        <input id="berat" name="berat" placeholder="(kg)" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                    <div class="col-8">
                        <input id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-8">
                        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <input id="email" name="email" placeholder="coeg_322@yahoo.com" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-8">
                        <select id="gender" name="gender" class="custom-select" aria-describedby="genderHelpBlock">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Prempuan</option>
                        </select>
                        <span id="genderHelpBlock" class="form-text text-muted">Choose your Gender</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Periksa</th>
                        <th scope="col">Kode Pasien</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Berat(kg)</th>
                        <th scope="col">Tinggi(cm)</th>
                        <th scope="col">Nilai BMI</th>
                        <th scope="col">Status BMI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pasien1 = new Pasien(1, 'P001', 'Intan', 'Jakarta', '1999-03-22', 'intan322@gmail.com', 'L');
                    $pasien2 = new Pasien(2, 'P002', 'Anggi', 'Jakarta', '1999-04-20', 'anggi@gmail.com', 'P');
                    $pasien3 = new Pasien(3, 'P002', 'Nanda', 'Jakarta', '1999-06-16', 'nanda616@gmail.com', 'L');
                    $bmi1 = new Bmi(69.8, 169);
                    $bmi2 = new Bmi(55.3, 165);
                    $bmi3 = new Bmi(45.2, 171);
                    $bmipasien1 = new BmiPasien($pasien1->id, $bmi1->nilaiBMI(), '2022-01-10', $pasien1->nama);
                    $bmipasien2 = new BmiPasien($pasien2->id, $bmi2->nilaiBMI(), '2022-01-10', $pasien2->nama);
                    $bmipasien3 = new BmiPasien($pasien3->id, $bmi3->nilaiBMI(), '2022-01-11', $pasien3->nama);
                    $pasien_data1 = ['id' => $pasien1->id, 'tanggal' => $bmipasien1->tanggal, 'kode' => $pasien1->kode, 'nama' => $pasien1->nama, 'gender' => $pasien1->gender, 'berat' => $bmi1->berat, 'tinggi' => $bmi1->tinggi, 'nilai' => $bmi1->nilaiBMI(), 'status' => $bmi1->statusBMI()];
                    $pasien_data2 = ['id' => $pasien2->id, 'tanggal' => $bmipasien2->tanggal, 'kode' => $pasien2->kode, 'nama' => $pasien2->nama, 'gender' => $pasien2->gender, 'berat' => $bmi2->berat, 'tinggi' => $bmi2->tinggi, 'nilai' => $bmi2->nilaiBMI(), 'status' => $bmi2->statusBMI()];
                    $pasien_data3 = ['id' => $pasien3->id, 'tanggal' => $bmipasien3->tanggal, 'kode' => $pasien3->kode, 'nama' => $pasien3->nama, 'gender' => $pasien3->gender, 'berat' => $bmi3->berat, 'tinggi' => $bmi3->tinggi, 'nilai' => $bmi3->nilaiBMI(), 'status' => $bmi3->statusBMI()];
                    $data = [$pasien_data1, $pasien_data2, $pasien_data3];
                    if ($_POST) {
                        $id = $_POST['id'];
                        $kode = $_POST['kode'];
                        $nama = $_POST['nama'];
                        $tinggi = $_POST['tinggi'];
                        $berat = $_POST['berat'];
                        $tmp_lahir = $_POST['tmp_lahir'];
                        $tgl_lahir = $_POST['tgl_lahir'];
                        $email = $_POST['email'];
                        $gender = $_POST['gender'];
                        $pasien4 = new Pasien($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender);
                        $bmi4 = new Bmi($berat, $tinggi);
                        $bmipasien4 = new BmiPasien($pasien3->id, $bmi3->nilaiBMI(), '2022-01-12', $pasien3->nama);
                        $pasien_data4 = ['id' => $pasien4->id, 'tanggal' => $bmipasien4->tanggal, 'kode' => $pasien4->kode, 'nama' => $pasien4->nama, 'gender' => $pasien4->gender, 'berat' => $bmi4->berat, 'tinggi' => $bmi4->tinggi, 'nilai' => $bmi4->nilaiBMI(), 'status' => $bmi4->statusBMI()];
                        $data[3] = $pasien_data4;
                    };
                    
                    $no = 1;
                    foreach ($data as $data_pasien) :
                    ?>
                        <tr>
                            <td scope="row"><?= $no ?></td>
                            <td><?= $data_pasien['tanggal'] ?></td>
                            <td><?= $data_pasien['kode'] ?></td>
                            <td><?= $data_pasien['nama'] ?></td>
                            <td><?= $data_pasien['gender'] ?></td>
                            <td><?= $data_pasien['berat'] ?></td>
                            <td><?= $data_pasien['tinggi'] ?></td>
                            <td><?= $data_pasien['nilai'] ?></td>
                            <td><?= $data_pasien['status'] ?></td>
                        </tr>
                    <?php $no++;
                endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
</body>

</html>