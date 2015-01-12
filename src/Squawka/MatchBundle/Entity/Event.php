<?php
/**
 * Created by PhpStorm.
 * User: Sohrab Khan
 * Date: 09/01/2015
 * Time: 19:38
 */

namespace Squawka\MatchBundle\Entity;

/**
 * Represents a Football Match
 * In version 0.2 can represent a Doctrine Entity and the XML files can be stored in a database like MongoDB or MySQL
 *
 * Class Event
 * @package Squawka\MatchBundle\Entity
 */
class Event {
    /**
     * The unique identifier of the event
     * @var string
     */
    private $id;
    /**
     * The name of the venue
     * @var string
     */
    private $venue;
    /**
     * The DateTime of the event
     * @var \DateTime
     */
    private $event_date;
    /**
     * Name of the home team
     * @var string
     */
    private $homeTeam;
    /**
     * The name of the away team
     * @var string
     */
    private $awayTeam;
    /**
     * The score of the home team
     * @var int
     */
    private $homeScore;
    /**
     * The score of the away team
     * @var int
     */
    private $awayScore;
    /**
     * The name of the competition
     * @var string
     */
    private $competitionName;
    /**
     * The short name of the competition
     * @var string
     */
    private $competitionShortName;
    /**
     * The full image url of the icon of the competition
     * @var string
     */
    private $competitionIcon;

    public function __toString()
    {
        return "{" . $this->event_date . "} - {" . $this->homeTeam . "}{" . $this->homeScore . "} - {" .
        $this->awayScore . "}{" . $this->awayTeam . "}";
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * @param string $venue
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
    }

    /**
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->event_date;
    }

    /**
     * @param \DateTime $event_date
     */
    public function setEventDate($event_date)
    {
        $this->event_date = $event_date;
    }

    /**
     * @return string
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param string $homeTeam
     */
    public function setHomeTeam($homeTeam)
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     * @return string
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param string $awayTeam
     */
    public function setAwayTeam($awayTeam)
    {
        $this->awayTeam = $awayTeam;
    }

    /**
     * @return int
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * @param int $homeScore
     */
    public function setHomeScore($homeScore)
    {
        $this->homeScore = $homeScore;
    }

    /**
     * @return int
     */
    public function getAwayScore()
    {
        return $this->awayScore;
    }

    /**
     * @param int $awayScore
     */
    public function setAwayScore($awayScore)
    {
        $this->awayScore = $awayScore;
    }

    /**
     * @return string
     */
    public function getCompetitionName()
    {
        return $this->competitionName;
    }

    /**
     * @param string $competitionName
     */
    public function setCompetitionName($competitionName)
    {
        $this->competitionName = $competitionName;
    }

    /**
     * @return string
     */
    public function getCompetitionShortName()
    {
        return $this->competitionShortName;
    }

    /**
     * @param string $competitionShortName
     */
    public function setCompetitionShortName($competitionShortName)
    {
        $this->competitionShortName = $competitionShortName;
    }

    /**
     * @return string
     */
    public function getCompetitionIcon()
    {
        return $this->competitionIcon;
    }

    /**
     * @param string $competitionIcon
     */
    public function setCompetitionIcon($competitionIcon)
    {
        $this->competitionIcon = $competitionIcon;
    }
}