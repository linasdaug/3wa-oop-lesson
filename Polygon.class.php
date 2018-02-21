<?php

class Polygon extends Shape {

    public $p2x;
    public $p2y;
    public $p3x;
    public $p3y;


    public function setPoints($p1x, $p1y, $p2x, $p2y, $p3x, $p3y) {
        $this->x = $p1x;
        $this->y = $p1y;
        $this->p2x = $p2x;
        $this->p2y = $p2y;
        $this->p3x = $p3x;
        $this->p3y = $p3y;

    }

    public function drawP(SvgRenderer $ren) {
        $ren->drawPolygon($this);
    }

}


 ?>
