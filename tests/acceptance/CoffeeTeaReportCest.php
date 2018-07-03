<?php


class CoffeeTeaReportCest
{

    /**
     * @param AcceptanceTester $I
     */

    public function checkHighlightsTest(\Step\Acceptance\CheckHighlightsSteps $I)
    {
        $productName = "coffee-tea";
        $I->checkHighlights($productName);

    }
}
