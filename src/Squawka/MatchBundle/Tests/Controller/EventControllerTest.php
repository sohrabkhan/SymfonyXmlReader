<?php
/**
 * Created by PhpStorm.
 * User: Sohrab Khan
 * Date: 09/01/2015
 * Time: 23:43
 */

namespace Squawka\MatchBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EventController extends WebTestCase
{
    public function testEvents()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/v1/events');
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("{ 16-09-14 } - { Monaco }{ 1 } - { 0 }{ Leverkusen }")')->count()
        );
    }

    public function testEvent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/v1/event/home=Porto&away=BATE');
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("{ 17-09-14 } - { Porto }{ 6 } - { 0 }{ BATE }")')->count()
        );
    }

    public function testTeam()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/v1/team=Monaco');
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("{ 16-09-14 } - { Monaco }{ 1 } - { 0 }{ Leverkusen }")')->count()
        );
    }

    public function testTeamGoals()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/v1/team-goals/team=Leverkusen');
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("7")')->count()
        );
    }
}