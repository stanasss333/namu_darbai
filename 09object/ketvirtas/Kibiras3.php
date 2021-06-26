<?php

class Kibiras3 {
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
        return $this->akmenuKiekis;

    }
}