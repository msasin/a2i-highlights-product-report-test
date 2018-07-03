# a2i-highlights-product-report-test

Quick start:
1. Make `composer install` on repository
2. Start selenium server by `docker run --net=host selenium/standalone-chrome`
3. Start all test `php vendor/bin/composer run`
 
Good to know:
- Tests -> `/tests/acceptance/*`
- Data files to compare what is on website -> `/tests/_data/*`
- Test logic -> `/tests/Page/ProductReportPage.php` and `/tests/Step/Acceptance/CheckHighlightsSteps.php`
- Helper to get values from files -> `/tests/_support/Helper/Acceptance.php`
- Test config `/tests/acceptance.suite.yml`
