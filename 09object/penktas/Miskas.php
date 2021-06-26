<?php

class Miskas {
    protected $name;

    public function __construct($prop) {
        $this->name = $prop;
    }

    protected function papasakok() {
        echo "<h2>Aš gyvenu miške pavadintame $this->name, o kur tu?</h2>";
    }
}