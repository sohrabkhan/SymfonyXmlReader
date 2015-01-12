<?php
/**
 * Created by PhpStorm.
 * User: Sohrab Khan
 * Date: 10/01/2015
 * Time: 01:00
 */

namespace Squawka\MatchBundle\HelperServices;


class SearchService
{
    public function homeAwaySearch($home, $away, $eventList)
    {
        $searchResults = array();
        foreach($eventList as $event) {
            if($event->getHomeTeam() == $home && $event->getAwayTeam() == $away) {
                $searchResults[] = $event;
            }
        }
        return $searchResults;
    }

    public function teamSearch($team, $eventList)
    {
        $searchResults = array();
        foreach($eventList as $event) {
            if($event->getHomeTeam() == $team || $event->getAwayTeam() == $team) {
                $searchResults[] = $event;
            }
        }

        return $searchResults;
    }

    public function teamGoalsSearch($team, $eventList)
    {
        $totalGoals = 0;
        foreach($eventList as $event) {
            if($event->getHomeTeam() == $team) {
                $totalGoals += $event->getHomeScore();
            }
            if($event->getAwayTeam() == $team) {
                $totalGoals += $event->getAwayScore();
            }
        }

        return $totalGoals;
    }
}