<?php


class CocoaReportCest
{

    /**
     * @param AcceptanceTester $I
     */

    public function checkHighlightsTest(\Step\Acceptance\CheckHighlightsSteps $I)
    {
        $productName = "cocoa";
        $I->checkHighlights($productName);

    }
}
