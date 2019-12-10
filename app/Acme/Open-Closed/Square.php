<?php

namespace App\Acme;

// class Square {
//     public $width;
//     public $height;

//     public function __construct($height, $width)
//     {
//         $this->height = $height;
//         $this->width = $width;
//     }
// }

class Square implements Shape {
    public $width;
    public $height;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}
