<?php

class SvgRenderer {    // graphic engine generator

    public $elements;

    function __construct($width = 1000, $height = 1000, $color = 'white'){     // paleidziamas vos tik sukuriamas new SvgRenderer

        $this->elements = [];
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;

    }

    public function drawRect($rectangle) {
        $x = $rectangle->location->x;
        $y = $rectangle->location->y;
        $rotation = $rectangle->rotation;
        $width = $rectangle->width;
        $height = $rectangle->height;
        $color = $rectangle->color;
        $opacity = $rectangle->opacity;
        $svg = '<rect x = "'.$x.'" y = "'.$y.'" width = "'.$width.'" height = "'.$height.'" fill="'.$color.'" opacity = "'.$opacity.'" transform="rotate('.$rotation.')"/>';

        if ($width > $this->width) {
            throw new Exception('Element cannot be bigger than Viewport');
        }


        array_push($this->elements, $svg);
    }

    public function drawCircle($circle) {
        $x = $circle->location->x;
        $y = $circle->location->y;
        $radius = $circle->radius;
        $color = $circle->color;
        $opacity = $circle->opacity;
        $rotation = $circle->rotation;
        $svg = '<circle cx = "'.$x.'" cy = "'.$y.'" r = "'.$radius.'" fill="'.$color.'" opacity = "'.$opacity.'" />';
        array_push($this->elements, $svg);
    }


    public function drawEllipse($ellipse) {
        $x = $ellipse->location->x;
        $y = $ellipse->location->y;
        $rx = $ellipse->rx;
        $ry = $ellipse->ry;
        $color = $ellipse->color;
        $opacity = $ellipse->opacity;
        $rotation = $ellipse->rotation;
        $svg = '<ellipse cx = "'.$x.'" cy = "'.$y.'" rx = "'.$rx.'" ry = "'.$ry.'" fill="'.$color.'" opacity = "'.$opacity.'" transform="rotate('.$rotation.')"/>';
        array_push($this->elements, $svg);
    }


    public function drawTriangle($polygon) {
        $x = $polygon->x;
        $y = $polygon->y;
        $p2x = $polygon->p2x;
        $p2y = $polygon->p2y;
        $p3x = $polygon->p3x;
        $p3y = $polygon->p3y;
        $color = $polygon->color;
        $opacity = $polygon->opacity;
        $rotation = $polygon->rotation;
        $svg = '<polygon points ="'.$x.','.$y.' '.$p2x.','.$p2y.' '.$p3x.','.$p3y.'" fill="'.$color.'" opacity = "'.$opacity.'" transform="rotate('.$rotation.')" />';
        array_push($this->elements, $svg);
        }

    public function drawPolygon($polygon) {
        $color = $polygon->color;
        $opacity = $polygon->opacity;
        $points = $polygon->points;
        $rotation = $polygon->rotation;
        $svg = '<polygon points = "';
        for ($i=0; $i < count($points); $i+=2) {
            $svg .= $points[$i].','.$points[$i+1].' ';
        }
        $svg .= '" fill="'.$color.'" opacity = "'.$opacity.'" transform="rotate('.$rotation.')"/>';
        array_push($this->elements, $svg);
    }

    public function drawCube($cube) {
        $x = $cube->location->x;
        $y = $cube->location->y;
        $width = $cube->width;
        $height = $width;
        $color = $cube->color;
        $opacity = $cube->opacity;
        $rotation = $cube->rotation;

        $svg = '<rect x = "'.$x.'" y = "'.$y.'" width = "'.$width.'" height = "'.$height.'" fill="'.$color.'" opacity = "'.$opacity.'" transform="rotate('.$rotation.')"/>';
        array_push($this->elements, $svg);


        $points = [$x, $y];
        array_push($points, $x + $width/2, $y - $width/2);
        array_push($points, $x + $width/2 + $width, $y - $width/2);
        array_push($points, $x + $width, $y);
        $svg = '<polygon points = "';
        for ($i=0; $i < count($points); $i+=2) {
            $svg .= $points[$i].','.$points[$i+1].' ';
        }
        $svg .= '" fill="'.$color.'" opacity = "'.($opacity/2).'" transform="rotate('.$rotation.')" />';
        array_push($this->elements, $svg);


        $points = [$x + $width, $y];
        array_push($points, $x + $width + $width/2, $y - $width/2);
        array_push($points, $x + $width/2 + $width, $y + $width/2);
        array_push($points, $x + $width, $y + $width);
        $svg = '<polygon points = "';
        for ($i=0; $i < count($points); $i+=2) {
            $svg .= $points[$i].','.$points[$i+1].' ';
        }
        $svg .= '" fill="'.$color.'" opacity = "'.($opacity/3).'" transform="rotate('.$rotation.')" />';
        array_push($this->elements, $svg);

    }

    public function drawText($text) {
        $x = $text->location->x;
        $y = $text->location->y;
        $rotation = $text->rotation;
        $color = $text->color;
        $content = $text->content;
        $svg = '<text x = "'.$x.'" y = "'.$y.'" fill="'.$color.'" transform="rotate('.$rotation.')">'.$content.'</text>';
        array_push($this->elements, $svg);
    }



    public function run() {
        $svg = "<svg width='".$this->width."' height='".$this->height."' fill='".$this->color."'>";
        $svg .= implode($this->elements);
        $svg .= "</svg>";
        echo $svg;
    }
}


 ?>
