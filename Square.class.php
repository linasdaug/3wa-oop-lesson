<?php


class Square extends Rectangle {

    public function __construct() {
        parent::__construct();
    }

    public function setSize($w, $h = 0) {   //antras parametras turi tureti bet kokia default reiksme, $h = 0;
        $this->width = $w;
        $this->height = $w;
    }

}




 ?>
