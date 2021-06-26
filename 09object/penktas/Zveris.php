<?php

class Zveris extends Miskas {
    protected $name;
    

    protected function papasakok() {
        echo "<h2>Aš esu žvėris vardu $this->name</h2>";
        parent::papasakok();
    }
    public function pasaka() {
        $this->papasakok();
    }

}