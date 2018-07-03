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

    public function checkHighLights($highlightsValuesToCompare)
    {
        $this::checkImportCountryValue($highlightsValuesToCompare[0]);
        $this::checkImportBiggestCommodity($highlightsValuesToCompare[1]);
        $this::checkImportPercentageChange($highlightsValuesToCompare[2]);
        $this::checkImportValue($highlightsValuesToCompare[3]);
    }

    private function checkImportCountryValue($country)
    {
        $I = $this->tester;
        $I->see($country, self::$importCountryEl);
    }

    private function checkImportBiggestCommodity($biggestCommodity)
    {
        $I = $this->tester;
        $I->see($biggestCommodity, self::$importBiggestCommodityEl);
    }

    private function checkImportPercentageChange($percentageChange)
    {
        $I = $this->tester;

        $value = $I->grabTextFrom(self::$importPercentageChangeEl);
        $I->assertEquals($value, $percentageChange);
        //$I->canSee($percentageChange, self::$importPercentageChangeEl);
    }

    private function checkImportValue($importValue)
    {
        $I = $this->tester;
        $I->see($importValue, self::$importValueEl);
    }


}