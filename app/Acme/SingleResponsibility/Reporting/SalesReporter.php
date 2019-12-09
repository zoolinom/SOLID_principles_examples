<?php

namespace App\Acme\SingleResponsibility\Reporting;

use App\Acme\SingleResponsibility\Reporting\Repositories\SalesRepository;

class SalesReporter {

    private $repo;

    public function __construct(SalesRepository $repo)
    {
        $this->repo = $repo;
    }

    public function between($startDate, $endDate, SalesOutputInterface $formatter)
    {
        /*
        * This violates Single Responsibility principle because SalesReporter do not need to know about getting data from database
        */
        //$sales = $this->queryDBForSalesBetween($startDate, $endDate);

        /*
        * Now this class have one less responsibility
        * It is easier to test and more maintainable
        */
        $sales = $this->repo->between($startDate, $endDate);

        /*
        * This violates Single Responsibility principle because if we change how we output data there should be also change
        */
        //return $this->format($sales);

        return $formatter->output($sales);
    }
}
