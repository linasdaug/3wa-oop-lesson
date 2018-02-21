<?php

class Text extends Shape {

    public $content;

    public function __construct() {
        parent::__construct();
    }

    public function writeText($text) {
        $this->content = $text;
    }

    public function draw(SvgRenderer $ren) {
        $ren->drawText($this);
    }

}


 ?>
