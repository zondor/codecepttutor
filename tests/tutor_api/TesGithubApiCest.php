<?php
use \Tutor_apiTester;

class TesGithubApiCest
{
    public function _before(Tutor_apiTester $I)
    {
    }

    public function _after(Tutor_apiTester $I)
    {
    }

    // tests
    public function tryToSearchInGithubApi(Tutor_apiTester $I)
    {
        $I->wantTo('Search using github api');
        $I->sendGET('search/repositories', ['q' => 'Codeception']);
        $I->seeResponseIsJson();
        $I->seeHttpHeaderOnce('X-RateLimit-Limit');
        $RateLimit = (int)$I->grabHttpHeader('X-RateLimit-Limit');
        $response = $I->grabResponse();
        $I->assertEquals(20, $RateLimit);


    }
}