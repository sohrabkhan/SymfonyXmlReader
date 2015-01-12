<?php
/**
 * Created by PhpStorm.
 * User: Sohrab Khan
 * Date: 09/01/2015
 * Time: 23:31
 */

namespace Squawka\MatchBundle\Tests\HelperService;


use Squawka\MatchBundle\HelperServices\ProcessService;

class ProcessServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testProcess()
    {
        $process = new ProcessService();
        $eventList = $process->process();
        $this->assertNotEmpty($eventList);
    }
}