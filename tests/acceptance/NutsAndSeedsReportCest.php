<?php


class NutsAndSeedsReportCest
{

    /**
     * @param AcceptanceTester $I
     */

    public function checkHighlightsTest(\Step\Acceptance\CheckHighlightsSteps $I)
    {
        $productName = "nuts-and-seeds";
        $I->checkHighlights($productName);

    }
}
