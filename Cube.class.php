<?php

class Cube extends Shape {
    
    public function __construct() {
        parent::__construct();
    }

    public function setSize($w, $h = 0) {   //antras parametras turi tureti bet kokia default reiksme, $h = 0;
        $this->width = $w;
        $this->height = $w;
    }

    public function draw(SvgRenderer $ren) {
        $ren->drawCube($this);
    }

}

?>
