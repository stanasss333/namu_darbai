<?php

class Pinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function __construct(){
        $this->popieriniaiPinigai = 0;
        $this->metaliniaiPinigai = 0;
    }

    public function ideti($kiekis) {
        if($kiekis > 0) {
            if($kiekis <= 2) {
                return $this->metaliniaiPinigai += $kiekis;
            }
            return $this->popieriniaiPinigai += $kiekis;
        }
    } 
    public function skaiciuoti() {
        $this->metaliniaiPinigai += $this->popieriniaiPinigai;
        echo "<h2>Pinigineje yra: $this->metaliniaiPinigai pinigu</h2>";
    }
}