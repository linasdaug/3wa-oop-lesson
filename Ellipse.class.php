<?php

class Ellipse extends Shape {

    public $rx;
    public $ry;

    public function setRadiuses($rx, $ry) {
        $this->rx = $rx;
        $this->ry = $ry;
    }

    public function drawE(SvgRenderer $ren) {
        $ren->drawEllipse($this);
    }

}


 ?>
