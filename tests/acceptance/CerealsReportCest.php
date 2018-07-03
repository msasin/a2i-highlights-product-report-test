<?php


class CerealsReportCest
{

    /**
     * @param AcceptanceTester $I
     */

    public function checkHighlightsTest(\Step\Acceptance\CheckHighlightsSteps $I)
    {
        $productName = "cereals";
        $I->checkHighlights($productName);

    }
}
