<?php

class Circle extends Shape {

    public $radius;

    public function __construct() {
        parent::__construct();
        $this->radius = 100;
    }



    public function setRadius($r) {
        $this->radius = $r;
    }

    public function draw(SvgRenderer $ren) {
        $ren->drawCircle($this);
    }

}


 ?>
