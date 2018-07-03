<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Lib\ModuleContainer;

class Acceptance extends \Codeception\Module
{

    public function getHighlightsValuesToCompare($productName)
    {
        return $highlightsValuesToCompare[] = file("tests/_data/".$productName);

    }

}
