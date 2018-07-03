<?php


class JuicesReportCest
{

    /**
     * @param AcceptanceTester $I
     */

    public function checkHighlightsTest(\Step\Acceptance\CheckHighlightsSteps $I)
    {
        $productName = "juices";
        $I->checkHighlights($productName);

    }
}
