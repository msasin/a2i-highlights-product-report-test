<?php


class VegetablesReportCest
{

    /**
     * @param AcceptanceTester $I
     */

    public function checkHighlightsTest(\Step\Acceptance\CheckHighlightsSteps $I)
    {
        $productName = "vegetables";
        $I->checkHighlights($productName);

    }
}
