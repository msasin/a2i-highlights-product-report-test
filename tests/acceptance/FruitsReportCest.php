<?php


class FruitsReportCest
{

    /**
     * @param AcceptanceTester $I
     */

    public function checkHighlightsTest(\Step\Acceptance\CheckHighlightsSteps $I)
    {
        $productName = "fruits";
        $I->checkHighlights($productName);

    }
}
