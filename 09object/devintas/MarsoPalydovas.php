<?php

class MarsoPalydovas {
    private $title;
    public static $palydovai;

    public function __construct($title) {
        $this->title = $title;
    } 

    public static function getMarsoPalydovas() {
        return self::$palydovai ?? self::$palydovai = new self;
    }
}