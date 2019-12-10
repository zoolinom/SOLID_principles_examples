<?php

namespace App\Acme;

// class Circle {
//     public $radius;

//     public function __construct($radius)
//     {
//         $this->radius = $radius;
//     }
// }

class Circle implements Shape {
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}
