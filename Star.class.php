<?php

class Star extends Shape {

    public $points;

    public function __construct() {
        parent::__construct();
    }

// [100,10, 40,198, 190,78, 10,78, 160,198]


    public function setWidth($w) {
        $this->points[0] = $this->location->x-10 + 100*($w/190);
        $this->points[1] = $this->location->y-10 + 10*($w/190);
        $this->points[2] = $this->location->x-10 + 40*($w/190);
        $this->points[3] = $this->location->y-10 + 198*($w/190);
        $this->points[4] = $this->location->x-10 + 190*($w/190);
        $this->points[5] = $this->location->y-10 + 78*($w/190);
        $this->points[6] = $this->location->x-10 + 10*($w/190);
        $this->points[7] = $this->location->y-10 + 78*($w/190);
        $this->points[8] = $this->location->x-10 + 160*($w/190);
        $this->points[9] = $this->location->y-10 + 198*($w/190);

    }

    public function draw(SvgRenderer $ren) {
        $ren->drawPolygon($this);
    }

}

?>
