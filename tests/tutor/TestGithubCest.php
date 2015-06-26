<?php
use \TutorTester;

class TestGithubCest
{
    public function _before(TutorTester $I)
    {
    }

    public function _after(TutorTester $I)
    {
    }

    // tests
    public function tryToTest(TutorTester $I)
    {
    }

    public function tryToTestGithubHomePage(TutorTester $I)
    {
        $I->wantTo('search on github as Guest user');
        $I->amOnPage('/');
        $I->submitForm('.js-site-search-form',
                ['q' => 'codeception']
        );
        $I->see('We\'ve found', 'h3');
        $I->seeNumberOfElements('.codesearch-results ul li', 10);
    }
}