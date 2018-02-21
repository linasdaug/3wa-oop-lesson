<?php


class Shape {

    public $x;
    public $y;
    public $color;
    public $opacity;

    public function setLocation($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function setColor($c) {
        $this->color = $c;
    }

    public function setOpacity($o) {
        $this->opacity = $o;
    }

}




 ?>
