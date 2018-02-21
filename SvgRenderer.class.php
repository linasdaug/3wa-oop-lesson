<?php

class SvgRenderer {    // graphic engine generator

    public $elements;

    function __construct(){     // paleidziamas vos tik sukuriamas new SvgRenderer
        $this->elements = [];
    }

    public function drawRect($rectangle) {
        $x = $rectangle->x;
        $y = $rectangle->y;
        $width = $rectangle->width;
        $height = $rectangle->height;
        $color = $rectangle->color;
        $opacity = $rectangle->opacity;
        $svg = '<rect x = "'.$x.'" y = "'.$y.'" width = "'.$width.'" height = "'.$height.'" fill="'.$color.'" opacity = "'.$opacity.'" />';
        array_push($this->elements, $svg);
    }

    public function drawCircle($circle) {
        $x = $circle->x;
        $y = $circle->y;
        $radius = $circle->radius;
        $color = $circle->color;
        $opacity = $circle->opacity;
        $svg = '<circle cx = "'.$x.'" cy = "'.$y.'" r = "'.$radius.'" fill="'.$color.'" opacity = "'.$opacity.'" />';
        array_push($this->elements, $svg);
    }


    public function drawEllipse($ellipse) {
        $x = $ellipse->x;
        $y = $ellipse->y;
        $rx = $ellipse->rx;
        $ry = $ellipse->ry;
        $color = $ellipse->color;
        $opacity = $ellipse->opacity;
        $svg = '<ellipse cx = "'.$x.'" cy = "'.$y.'" rx = "'.$rx.'" ry = "'.$ry.'" fill="'.$color.'" opacity = "'.$opacity.'" />';
        array_push($this->elements, $svg);
    }


    public function drawPolygon($polygon) {
        $x = $polygon->x;
        $y = $polygon->y;
        $p2x = $polygon->p2x;
        $p2y = $polygon->p2y;
        $p3x = $polygon->p3x;
        $p3y = $polygon->p3y;
        $color = $polygon->color;
        $opacity = $polygon->opacity;
        $svg = '<polygon points ="'.$x.','.$y.' '.$p2x.','.$p2y.' '.$p3x.','.$p3y.'" fill="'.$color.'" opacity = "'.$opacity.'" />';
        array_push($this->elements, $svg);
        }




    public function run() {
        $svg = "<svg width='900' height='900'>";
        $svg .= implode($this->elements);
        $svg .= "</svg>";
        echo $svg;
    }
}


 ?>
