<?php

class Kibiras1 {
    protected $akmenuKiekis;
    
    public function __construct(){
        $this->akmenuKiekis = 0;
    }
    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
    }
    public function pridetiDaugAkmenu($kiekis) {
         $this->akmenuKiekis +=$kiekis;

    }
    public function kiekPririnktaAkmenu() {
        echo "<h2>Pririnkta akmenu: $this->akmenuKiekis</h2>";

    }
}