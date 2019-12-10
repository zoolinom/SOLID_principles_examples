<?php

namespace App\Acme;

class AreaCalculator {
    /*
    public function calculate($squares)
    {
        foreach ($squares as $square) {
            $area[] = $square->width * $square->height;
        }

        return array_sum($area);
    }
    */

    /*
    * We can change squares with shapes but area calculation for square and circle is different
    * We have broken Open-Closed principle, this class is open for modification when it should have been closed
    *
    * Separate extansible behaviour behind an interface, and flip the dependencies
    */
    // public function calculate($shapes)
    // {
    //     foreach ($shapes as $shape) {
    //         // if ($shape instanceof Square)
    //         if (is_a($shape, 'Square')) {
    //             $area[] = $shape->width * $shape->height;
    //         }
    //         else
    //         {
    //             $area[] = $shape->radius * $shape->radius * pi();
    //         }
    //     }

    //     return array_sum($area);
    // }

    /*
    * If we need to implements Triangle we do not need to change this code
    * We will add Triangle that implements common Interface and calculate are there
    */
    public function calculate($shapes)
    {
        foreach ($shapes as $shape)
        {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}
