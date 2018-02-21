<?php

class A {
    public $viesas = 1;
    private $pasleptas = 2;
    protected $pusiau = 3;

    public function out() {
        echo $this->viesas;
        echo $this->pasleptas;
        echo $this->pusiau;
    }

}

class B extends A {
    public function out2() {
        echo $this->viesas;
        echo $this->pasleptas;
        echo $this->pusiau;
    }

}


$a = new A();
$b = new B();
//
// echo "<pre>";
// var_dump($a);
// var_dump($b);
//
// echo "</pre>";
//
// echo $b->viesas;
// echo $b->pasleptas;
// echo $b->pusiau;

$b->out2();
 ?>
