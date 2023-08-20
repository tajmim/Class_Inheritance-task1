<?php

class Shape {
    protected $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function calculateArea() {
        return 0;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        parent::__construct("Circle");
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        parent::__construct("Rectangle");
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}



$shape1 = new Circle(10);
echo $shape1->getRadius() . "<br>";
echo $shape1->getType() . "<br>";
echo $shape1->calculateArea() . "<br><br><br><br>";


$shape2 = new Rectangle(20 , 30);
echo $shape2->getType() . "<br>";
echo $shape2->getWidth() . "<br>";
echo $shape2->getHeight() . "<br>";
echo $shape2->calculateArea() . "<br><br><br><br>";


