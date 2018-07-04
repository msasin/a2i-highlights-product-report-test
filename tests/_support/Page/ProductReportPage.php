<?php

namespace Page;


class ProductReportPage
{
    public static $importCountryEl = "//img[@class='flag']/../figcaption";
    public static $importBiggestCommodityEl = "//img[@alt='Import Biggest Commodity Description']/../figcaption";
    public static $importPercentageChangeEl = "//img[@alt='Import Percentage Change Description']/../figcaption";
    public static $importValueEl = "//img[@alt='Import Value Description']/../figcaption";


    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }



    public function checkHighLights($productName)
    {
        $I = $this->tester;

        $highlightsValuesToCompare = $I->getHighlightsValuesToCompare($productName);


        $this::checkHighlightOnWebsite($highlightsValuesToCompare[0], self::$importCountryEl);
        $this::checkHighlightOnWebsite($highlightsValuesToCompare[1], self::$importBiggestCommodityEl);
        $this::checkHighlightOnWebsite($highlightsValuesToCompare[2], self::$importPercentageChangeEl);
        $this::checkHighlightOnWebsite($highlightsValuesToCompare[3], self::$importValueEl);

    }

    private function checkHighlightOnWebsite($expectedValue, $currentValueEl)
    {
        $I = $this->tester;
        $currentValue = $this::grabTextFromElement($currentValueEl);
        $I->assertEquals($expectedValue, $currentValue);
    }



    private function grabTextFromElement($highlightEl)
    {
        $I = $this->tester;
        return $value = $I->grabTextFrom($highlightEl);
    }


}