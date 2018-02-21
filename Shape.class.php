<?php


class Shape {

    public $location;
    public $color;
    public $opacity;
    public $rotation;

    public function __construct() {
        $this->color = "black";
        $this->opacity = 1;
        $this->location = new Point();
    }


    public function setColor($c) {
        $this->color = $c;
    }

    public function setOpacity($o = 1) {
        $this->opacity = $o;
    }

    public function setRotation($r = 0) {
        $this->rotation = $r;
    }


}




 ?>
