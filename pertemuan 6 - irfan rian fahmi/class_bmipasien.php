<?php
class BmiPasien{
    public $id;
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($id, $bmi, $tanggal, $pasien){
        $this->id = $id;
        $this->bmi = $bmi;
        $this->tanggal = $tanggal;
        $this->pasien = $pasien;
    }

    function cetak(){
        echo 'ID: ' . $this->id;
        echo '<br>';
        echo 'BMI: ' . $this->bmi;
        echo '<br>';
        echo 'Tanggal: ' . $this->tanggal;
        echo '<br>';
        echo 'Pasien: ' . $this->pasien;
        echo '<br>';
    }
}
?>