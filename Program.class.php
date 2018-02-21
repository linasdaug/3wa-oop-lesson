<?php


error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');


class Program {

    public function run(SvgRenderer $ren) {   //class injection

        $rectangle1 = new Rectangle();
        $rectangle1->setLocation(200, 200);
        $rectangle1->setSize(150, 100);
        $rectangle1->setColor('magenta');
        $rectangle1->setOpacity(0.7);
        $rectangle1->draw($ren);

        $circle1 = new Circle();
        $circle1->setLocation(400, 300);
        $circle1->setRadius(120);
        $circle1->setColor('khaki');
        $circle1->setOpacity(0.7);
        $circle1->drawC($ren);

        $ellipse1 = new Ellipse();
        $ellipse1->setLocation(150, 400);
        $ellipse1->setRadiuses(100, 50);
        $ellipse1->setColor('crimson');
        $ellipse1->setOpacity(0.8);
        $ellipse1->drawE($ren);

        $pol1 = new Polygon();
        $pol1->setPoints(30, 30, 30, 400, 400, 400);
        $pol1->setColor('aquamarine');
        $pol1->setOpacity(0.8);
        $pol1->drawP($ren);




        $ren->run();
    }
}


 ?>
