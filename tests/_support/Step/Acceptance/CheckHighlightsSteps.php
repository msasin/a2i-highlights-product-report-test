<?php
namespace Step\Acceptance;
use \Page\ProductReportPage as Page;

class CheckHighlightsSteps extends \AcceptanceTester
{
    public function checkHighlights($productName)
    {
        $I = $this;
        $I->amOnPage("/".$productName);
        $highlightsValuesToCompare = $I->getHighlightsValuesToCompare($productName);

        $productReportPage = new Page($I);
        $productReportPage->checkHighLights($highlightsValuesToCompare);
    }

}