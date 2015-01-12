<?php
/**
 * Created by PhpStorm.
 * User: Sohrab Khan
 * Date: 09/01/2015
 * Time: 19:40
 */

namespace Squawka\MatchBundle\HelperServices;

use Squawka\MatchBundle\Entity\Directory;
use Squawka\MatchBundle\Entity\Event;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Finder\Finder;

/**
 * The helper service for processing the directory containing all the XML documents
 * Class ProcessService
 *
 * Class ProcessService
 * @package Squawka\MatchBundle\HelperServices
 */
class ProcessService {
    /**
     * Process the directory for XML Files
     *
     * @param string $directory
     * @return array
     */
    public function process($directory = Directory::DIRECTORY_NAME)
    {
        $fileList = $this->getFilesFromDirectory($directory);
        $eventList = array();

        foreach($fileList as $file) {
            $eventList[] = $this->readXMLFile($file);
        }

        return $eventList;
    }

    /**
     * Reads the XML file, builds an Event Object and returns it
     *
     * @param $file
     * @return Event
     */
    private function readXMLFile($file)
    {
        $xml = \simplexml_load_string(file_get_contents($file));

        return $this->buildEvent($xml);
    }

    /**
     * Build an Event object from the Crawler
     *
     * @param Crawler $crawler
     * @return Event
     */
    private function buildEvent(\SimpleXMLElement $xml)
    {
        $event = new Event();
        $event->setId($xml->event_id);
        $event->setVenue($xml->venue);
        $event->setEventDate(new \DateTime($xml->date));
        $homeAway = $xml->name;
        $teams = explode(" vs ", $homeAway);
        $event->setHomeTeam($teams[0]);
        $event->setAwayTeam($teams[1]);
        $event->setHomeScore($xml->home_team_score);
        $event->setAwayScore($xml->away_team_score);
        $event->setCompetitionName($xml->competition_name);
        $event->setCompetitionShortName($xml->competition_shortname);
        $event->setCompetitionIcon($xml->competition_icon);

        return $event;
    }

    /**
     * Reads the directory recursively and returns all the files
     * @param $directory
     * @return array
     */
    private function getFilesFromDirectory($directory)
    {
        $fileList = array();

        $finder = new Finder();
        $iterator = $finder
            ->files()
            ->name('*.xml')
            ->depth(0)
            ->in(__DIR__ . "/../../../../" . $directory);
        foreach ($iterator as $file) {
            $fileList[] = $file->getRealpath();
        }

        return $fileList;
    }

}