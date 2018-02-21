<?php

class Circle extends Shape {

    public $radius;

    public function setRadius($r) {
        $this->radius = $r;
    }

    public function drawC(SvgRenderer $ren) {
        $ren->drawCircle($this);
    }

}


 ?>
