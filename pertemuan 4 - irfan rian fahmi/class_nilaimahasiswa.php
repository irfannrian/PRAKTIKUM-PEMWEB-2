<?php

// Buat Class
class NilaiMahasiswa{
    // Buat Properti
    public $nim;
    public $matkul;
    public $nilai;

    // Buat Method Construct
    function __construct($nim, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    Function hitungnilai(){
        return $this->nilai;
    }
    // Buat Method grade
    Function grade($keterangan){
        if ($keterangan > 55) {
            return "Anda Lulus";
        }else {
            return "Anda Tidak Lulus";
        }
     }

     // Buat Method Predikat
    Function predikat($keterangan){
        if ($keterangan >= 85 && $keterangan <= 100) {
            return "A";
        }elseif ($keterangan >= 70 && $keterangan <= 84) {
            return "B";
        }elseif ($keterangan >= 56 && $keterangan <= 69) {
            return "C";
        }elseif ($keterangan >= 36 && $keterangan <= 55) {
            return "D";
        }elseif ($keterangan >= 0 && $keterangan <= 35) {
            return "E";
        }else {
            return "I";
        }
    } 
}     
    
?>