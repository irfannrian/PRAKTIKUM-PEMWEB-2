<?php

// Cara Buat Class
class Mahasiswa{
    // Cara Membuat Property (Variabel)
    public $nama;
    public $alamat;
    public $jurusan;

    // Cara Membuat Method (Fungsi)
    function CekNama(){
        echo "Nama Saya Adalah : ". $this->nama;

    }
    function __construct($datanama , $dataalamat , $datajurusan)
    {
        $this->nama = $datanama;
        $this->alamat = $dataalamat;
        $this->jurusan = $datajurusan;
    }
}
// Cara Buat Object
$mahasiswa1 = new Mahasiswa("Ganesha","Bogor","Informatika");
$mahasiswa2 = new Mahasiswa("Angga","Jakarta","Mesin");

// Cara Buat property
echo $mahasiswa1->nama;
echo "<br>";

// Akses Data Mahasiswa2
echo $mahasiswa2->nama;

// Cara Akses Method
// $mahasiswa1->CekNama();


?>