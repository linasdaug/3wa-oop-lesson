<?php


class Point {

    public $x;
    public $y;

    public function __construct() {
        $this->x = 0;
        $this->y = 0;
    }

    public function set($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }


    public function move($i, $j) {
        $this->x = $this->x + $i;
        $this->y = $this->y + $j;
    }



}
