<?php


error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');


class Program {

    public function run(SvgRenderer $ren) {   //class injection

        $rectangle1 = new Rectangle();
        $rectangle1->location->set(200, 200);
        $rectangle1->setSize(150, 100);
        $rectangle1->setColor('magenta');
        $rectangle1->setOpacity(0.8);
        $rectangle1->setRotation(-15);
        $rectangle1->draw($ren);

        $circle1 = new Circle();
        $circle1->location->set(400, 300);
        $circle1->setRadius(120);
        $circle1->setColor('khaki');
        $circle1->setOpacity(0.8);
        $circle1->draw($ren);

        $ellipse1 = new Ellipse();
        $ellipse1->location->set(150, 400);
        $ellipse1->setRadiuses(100, 50);
        $ellipse1->setColor('crimson');
        $ellipse1->setOpacity(0.8);
        $ellipse1->setRotation(15);
        $ellipse1->draw($ren);

        $pol2 = new Triangle();
        $pol2->setPoints(70, 70, 70, 450, 450, 450);
        $pol2->setColor('aquamarine');
        $pol2->setOpacity(0.8);
        $pol2->setRotation(5);
        $pol2->draw($ren);

        $rectangle1 = new Square();
        $rectangle1->location->set(400, 400);
        $rectangle1->setSize(150);
        $rectangle1->setColor('orange');
        $rectangle1->setOpacity(0.8);
        $rectangle1->setRotation(-5);
        $rectangle1->location->move(100, 0);
        $rectangle1->draw($ren);

        $pol1 = new Polygon();
        $masyvas = [100,10, 40,198, 190,78, 10,78, 160,198];
        $pol1->setPoints($masyvas);
        $pol1->setColor('cyan');
        $pol1->setOpacity(0.8);
        $pol1->setRotation(5);
        $pol1->draw($ren);

        $cube = new Cube();
        $cube->location->set(250, 700);
        $cube->setSize(150);
        $cube->setColor('mediumvioletred');
        $cube->setOpacity(0.8);
        $cube->setRotation(10);
        $cube->location->move(100, -100);
        $cube->draw($ren);


        $cube = new Cube();
        $cube->location->set(750, 100);
        $cube->setSize(50);
        $cube->setColor('coral');
        $cube->setOpacity(0.7);
        $cube->setRotation(-3);
        $cube->draw($ren);

        $text = new Text();
        $text->location->set(500, 200);
        $text->setColor('rebeccapurple');
        $text->setOpacity(0.8);
        $text->setRotation(45);
        $text->writeText('Kas turi formą, turi prasmę');
        $text->draw($ren);


        $text = new Text();
        $text->location->set(500, 220);
        $text->setColor('rebeccapurple');
        $text->setOpacity(0.8);
        $text->setRotation(45);
        $text->writeText('(P. Picasso)');
        $text->draw($ren);

        $star = new Star();
        $star->location->set(450, 420);
        $star->setWidth(500);
        $star->setColor('beige');
        $star->setOpacity(0.8);
        $star->setRotation(-5);
        $star->draw($ren);



        $ren->run();
    }
}


 ?>
