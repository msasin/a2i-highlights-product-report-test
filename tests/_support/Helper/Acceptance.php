<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Lib\ModuleContainer;

class Acceptance extends \Codeception\Module
{

    public function getHighlightsValuesToCompare($productName)
    {
        $highlightsValuesToCompare[] = file("tests/_data/".$productName);

        foreach($highlightsValuesToCompare as $chuj) {
            $highlightsValuesToCompare = str_replace(array("\n", "\r"), '', $chuj);

        }
        var_dump($highlightsValuesToCompare);

        return $highlightsValuesToCompare;

    }

}
