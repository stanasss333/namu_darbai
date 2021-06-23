<?php

class Kibiras2 {
    protected $akmenuKiekis;
    private static $akmenuKiekisVisuoseKibiruose;

    public function __construct(){
        $this->akmenuKiekis = 0;
        self::$akmenuKiekisVisuoseKibiruose = 0;
    }
    public static function getAkmenuKiekisVisuoseKibiruose() {
        return self::$akmenuKiekisVisuoseKibiruose;

    }
    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }
    public function pridetiDaugAkmenu($kiekis) {
         $this->akmenuKiekis +=$kiekis;
         self::$akmenuKiekisVisuoseKibiruose+=$kiekis;

    }
    
}