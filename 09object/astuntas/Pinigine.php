<?php

class Pinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    private $monetos = 0;
    private $banknotai = 0;

    public function __construct(){
        $this->popieriniaiPinigai = 0;
        $this->metaliniaiPinigai = 0;
    }

    public function ideti($kiekis) {
        if($kiekis > 0) {
            if($kiekis <= 2) {
                return $this->metaliniaiPinigai += $kiekis;
                $this->monetos();
            }
            return $this->popieriniaiPinigai += $kiekis;
            $this->banknotai();
        }
    } 
    public function skaiciuoti() {
        echo 'Metaliniai pinigai: '. $this->metaliniaiPinigai . 'Popieriniai pinigai: '. $this->popieriniaiPinigai;
        echo '<br>';
        echo 'Monetos: '.$this->monetos . ' Banknotai: '. $this->banknotai;
        echo '<br>';
        echo 'Suma: '. $this->metaliniaiPinigai + $this->popieriniaiPinigai;
    }
    public function monetos() {
        $this->monetos++;
    }
    public function banknotai() {
        $this->banknotai++;
    }
}