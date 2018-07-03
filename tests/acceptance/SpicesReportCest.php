<?php


class SpicesReportCest
{

    /**
     * @param AcceptanceTester $I
     */

    public function checkHighlightsTest(\Step\Acceptance\CheckHighlightsSteps $I)
    {
        $productName = "spices";
        $I->checkHighlights($productName);

    }
}
