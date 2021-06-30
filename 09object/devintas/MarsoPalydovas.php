<?php

class MarsoPalydovas {
    private $title;
    private static $palydovai = [];

    public function __construct($name) {
        $this->title = $name;
    } 

    public static function getMarsoPalydovas() {
        if (!isset(self::$palydovai[0])) {
            return self::$palydovai[0] = new self('Deimas');
        }
        if (!isset(self::$palydovai[1])) {
            return self::$palydovai[1] = new self('Fobas');
        }
        return self::$palydovai[rand(0, 1)];
    }
}