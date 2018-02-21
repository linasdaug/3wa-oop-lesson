<?php

class Polygon extends Shape {

    public $points;

    public function setPoints($masyvas) {
        $this->points = $masyvas;
    }

    public function draw(SvgRenderer $ren) {
        $ren->drawPolygon($this);
    }

}


 ?>
