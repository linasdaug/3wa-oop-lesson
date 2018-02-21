<?php

class Rectangle extends Shape {

    public $width;
    public $height;

    public function setSize($w, $h) {
        $this->width = $w;
        $this->height = $h;
    }

    public function draw(SvgRenderer $ren) {
        $ren->drawRect($this);
    }


}




 ?>
