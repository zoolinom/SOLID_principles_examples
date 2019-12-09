<?php

namespace App\Acme\SingleResponsibility\Reporting;

use App\Acme\SingleResponsibility\Reporting\SalesOutputInterface;

class HtmlOutput implements SalesOutputInterface {

    public function output($sales)
    {
        return "<h1>Sales: $sales</h1>";
    }
}
