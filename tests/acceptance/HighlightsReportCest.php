<?php


class HighlightsReportCest
{
    /**
     * @dataProvider pageProvider
     * @param AcceptanceTester $I
     * @param \Page\ProductReportPage $productReportPage
     * @param \Codeception\Example $example
     */

    public function highlightsTest(AcceptanceTester $I, \Page\ProductReportPage $productReportPage, \Codeception\Example $example)
    {
        $productName = $example['productName'];
        $I->amOnPage("/".$productName);
        $productReportPage->checkHighLights($productName);
    }



    /**
     * @return array
     */
    protected function pageProvider() // alternatively, if you want the function to be public, be sure to prefix it with `_`
    {
        return [
            ['productName'=>"cereals"],
            ['productName'=>"cocoa"],
            ['productName'=>"coffee-tea"],
            ['productName'=>"fruits"],
            ['productName'=>"juices"],
            ['productName'=>"nuts-and-seeds"],
            ['productName'=>"spices"],
            ['productName'=>"vegetables"],

        ];
    }

}