<?php

class Ellipse extends Shape {

    public $rx;
    public $ry;

    public function __construct() {
        parent::__construct();
        $this->rx = 100;
        $this->ry = 50;
    }

    public function setRadiuses($rx, $ry) {
        $this->rx = $rx;
        $this->ry = $ry;
    }

    public function draw(SvgRenderer $ren) {
        $ren->drawEllipse($this);
    }

}


 ?>
