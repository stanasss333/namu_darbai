<?php

class Krepsys {
    const DYDIS =  500;
    private $kiekis = 0;
    public function rinkti(Grybas $grybas) {
        if($grybas->valgomas && !$grybas->sukirmijes) {
            $this->kiekis += $grybas->svoris;
        }
        return self::DYDIS > $this->kiekis;
    }
}