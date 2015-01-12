<?php
/**
 * Created by PhpStorm.
 * User: Sohrab Khan
 * Date: 09/01/2015
 * Time: 19:35
 */

namespace Squawka\MatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Controller for Events.
 *
 * Class EventController
 * @package Squawka\MatchBundle\Controller
 */
class EventController extends Controller
{
    /**
     * Action to get all the events
     * @Route("/events", name="event_allevents")
     * @Template()
     */
    public function eventsAction()
    {
        $eventList = $this->get('squakwa.process')->process();

        return array('event_list' => $eventList);
    }

    /**
     * Action to get an event when given the home and away teams
     * @Route("/event/home={home}&away={away}", name="event_singleevent")
     * @Template()
     */
    public function eventAction($home, $away)
    {
        $eventList = $this->get('squakwa.process')->process();
        $searchResults = $this->get('squakwa.search')->homeAwaySearch($home, $away, $eventList);

        return array('results' => $searchResults);
    }

    /**
     * Action to get all matches of a particular team
     *
     * @Route("/team={team}", name="event_team")
     * @Template()
     */
    public function teamAction($team)
    {
        $eventList = $this->get('squakwa.process')->process();
        $searchResults = $this->get('squakwa.search')->teamSearch($team, $eventList);

        return array('results' => $searchResults);
    }

    /**
     * @Route("/team-goals/team={team}", name="event_team_goals")
     * @Template()
     */
    public function teamGoalsAction($team)
    {
        $eventList = $this->get('squakwa.process')->process();
        $totalGoals = $this->get('squakwa.search')->teamGoalsSearch($team, $eventList);

        return array('goals' => $totalGoals);
    }
}