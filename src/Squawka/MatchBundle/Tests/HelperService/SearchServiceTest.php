<?php
/**
 * Created by PhpStorm.
 * User: Sohrab Khan
 * Date: 10/01/2015
 * Time: 01:30
 */

namespace Squawka\MatchBundle\Tests\HelperService;


use Squawka\MatchBundle\HelperServices\ProcessService;
use Squawka\MatchBundle\HelperServices\SearchService;

class SearchServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testHomeAwaySearch()
    {
        $process = new ProcessService();
        $eventList = $process->process();
        $search = new SearchService();
        $results = $search->homeAwaySearch("Porto", "BATE", $eventList);

        $this->assertCount(1, $results);
    }

    public function testTeamSearch()
    {
        $process = new ProcessService();
        $eventList = $process->process();
        $search = new SearchService();
        $result = $search->teamSearch("Benfica", $eventList);

        $this->assertCount(6, $result);
    }

    public function testTeamGoalsSearch()
    {
        $process = new ProcessService();
        $eventList = $process->process();
        $search = new SearchService();
        $result = $search->teamGoalsSearch("Leverkusen", $eventList);

        $this->assertTrue($result == 7);
    }
}