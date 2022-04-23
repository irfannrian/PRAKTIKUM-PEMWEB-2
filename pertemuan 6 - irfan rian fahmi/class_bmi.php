<?php
class Bmi{
    public $berat;
    public $tinggi;
    public $nilaiBmi;
    public $statusBmi;

    function __construct($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    function nilaiBMI(){
        $this->nilaiBmi = number_format($this->berat / (($this->tinggi/100)^2),1);
        return $this->nilaiBmi;
    }

    function statusBMI(){
        if ($this->nilaiBmi<18.5){
            return $this->statusBmi = "Kekurangan Berat Badan";
        } else if ($this->nilaiBmi >= 18.5 && $this->nilaiBmi <= 24.9){
            return $this->statusBmi = "Normal (Ideal)";
        } else if ($this->nilaiBmi >= 25 && $this->nilaiBmi <= 29.9){
            return $this->statusBmi = "Kelebihan Berat Badan";
        } else {
            return $this->statusBmi = "Kegemukan (Obesitas)";
        }
    }
}
