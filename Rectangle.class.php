<?php

class Rectangle extends Shape {

    public $width;
    public $height;

    public function __construct() {    //default reiksmes
        parent::__construct();
        $this->width = 100;
        $this->height = 100;
    }

    public function setSize($w, $h) {
        $this->width = $w;
        $this->height = $h;
    }

    public function draw(SvgRenderer $ren) {
        $ren->drawRect($this);
    }


}




 ?>
