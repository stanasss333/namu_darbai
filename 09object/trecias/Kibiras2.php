<?php

class Kibiras2 {
    protected $akmenuKiekis;
    private static $akmenuKiekisVisuoseKibiruose;

    public function __construct(){
        $this->akmenuKiekis = 0;
        $this->akmenuKiekisVisuoseKibiruose = 0;
    }
    public static function getAkmenuKiekisVisuoseKibiruose() {
        return $this->akmenuKiekisVisuoseKibiruose;

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