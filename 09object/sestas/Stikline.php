<?php

class Stikline {
    private $turis;
    private $kiekis0 = 0;
    public function __construct($turis) {
        $this->turis = $turis;
    }

    public function ipilti($kiekis) {
        $this->kiekis0 += $kiekis;
        if($this->turis < $this->kiekis0) {
            $this->kiekis0 = $this->turis;
        }
        
    }
    public function ispilti($kiekis) {
        $this->kiekis0 -= $kiekis;
        if($this->kiekis0 < 0) {
            $this->kiekis0 = 0;
        }
        return $kiekis;
    }
}